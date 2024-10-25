import numpy as np

def match_fingerprints(minutiae1, minutiae2, threshold=15):
    """
    Matches two sets of minutiae points by comparing their Euclidean distances.
    minutiae1 (list): List of minutiae points for the first fingerprint.
    minutiae2 (list): List of minutiae points for the second fingerprint.
    threshold (float): Maximum allowable distance between two minutiae to be considered a match.
    """
    matches = 0
    for m1 in minutiae1:
        for m2 in minutiae2:
            dist = np.linalg.norm(np.array(m1[:2]) - np.array(m2[:2]))
            if dist < threshold and m1[2] == m2[2]:
                matches += 1
                break

    return matches / max(len(minutiae1), len(minutiae2))
