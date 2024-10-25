from trials.trial_01_preprocessing import preprocess_fingerprint
from trials.trial_02_feature_extraction import extract_minutiae
from trials.trial_03_fingerprint_matching import match_fingerprints
 
def verify_fingerprint(new_fingerprint_path, stored_fingerprint_path, match_threshold=0.5):
    """
    Verifies a new fingerprint by comparing it to a stored fingerprint.
    """
    # Preprocess both fingerprints
    new_skeleton = preprocess_fingerprint(new_fingerprint_path)
    stored_skeleton = preprocess_fingerprint(stored_fingerprint_path)
    
    # Extract minutiae from both fingerprints
    new_minutiae = extract_minutiae(new_skeleton)
    stored_minutiae = extract_minutiae(stored_skeleton)
    
    # Match the fingerprints
    match_score = match_fingerprints(new_minutiae, stored_minutiae)
    
    # Return True if the match score is above the threshold
    return match_score >= match_threshold
