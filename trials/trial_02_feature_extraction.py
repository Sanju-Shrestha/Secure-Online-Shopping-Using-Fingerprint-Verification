import numpy as np
def extract_minutiae(skeleton_img):
    """
    Extracts minutiae(features) points (ridge endings and bifurcations) from a skeletonized fingerprint image.
    Skeletonized fingerprint image (skeleton_img).
    """
    
    minutiae = []
    rows, cols = skeleton_img.shape

    for y in range(1, rows - 1):
        for x in range(1, cols - 1):
            if skeleton_img[y, x] == 255:
                # Count the number of 1's in the 3x3 neighborhood
                neighborhood = skeleton_img[y-1:y+2, x-1:x+2] // 255
                num_ones = np.sum(neighborhood)

                # Ridge ending (exactly 2 neighbors, including itself)
                if num_ones == 2:
                    minutiae.append((x, y, 'ending'))

                # Bifurcation (exactly 4 neighbors)
                elif num_ones == 4:
                    minutiae.append((x, y, 'bifurcation'))

    return minutiae
