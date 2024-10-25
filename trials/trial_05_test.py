from trials.trial_04_fingerprint_verification import verify_fingerprint

if __name__ == "__main__":
    # Paths to the new and stored fingerprint images
    new_fingerprint = "D:\Secure-Online-Shopping-Using-Fingerprint-Verification\data\sample-new-fingerprint.jpg"
    stored_fingerprint = "D:\Secure-Online-Shopping-Using-Fingerprint-Verification\data\sample-stored-fingerprint.jpg"
    
    # Verify fingerprint
    is_match = verify_fingerprint(new_fingerprint, stored_fingerprint)
    
    if is_match:
        print("[Successful]: Fingerprint verified successfully.")
    else:
        print("[Failed]: Fingerprint verification failed.")
