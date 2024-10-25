# Importing necessary libraries

import cv2
import numpy as np
from skimage.morphology import skeletonize

def preprocess_fingerprint(image_path):
    """
    Preprocesses the fingerprint image by converting it to grayscale, 
    applying Gaussian blur, thresholding, and skeletonization.
    """
    # Load the fingerprint image
    img = cv2.imread(image_path, cv2.IMREAD_GRAYSCALE)
    
    # Apply Gaussian blur
    blurred = cv2.GaussianBlur(img, (5, 5), 0)
    
    # Apply thresholding to get a binary image
    _, binary_img = cv2.threshold(blurred, 127, 255, cv2.THRESH_BINARY_INV)

    # Perform skeletonization using skimage's skeletonize
    skeleton = skeletonize(binary_img // 255).astype(np.uint8) * 255

    return skeleton
