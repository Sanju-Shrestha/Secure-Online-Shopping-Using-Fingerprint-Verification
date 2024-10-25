# Secure Online Shopping Using Fingerprint Verification

This project aims at enhancing security in online shopping by replacing OTP-based verification with a fingerprint authentication system. The solution minimizes dependency on mobile phones for OTP, improving both security and convenience by leveraging Python and the Minutiae Matching Algorithm (MMA) for real-time fingerprint verification.

## Project Motivation
With the rise of online shopping, unauthorized transactions have become a common problem, especially with the increasing sophistication of data theft tactics. The common OTP verification process can be compromised if an unauthorized person has access to the user's phone number. Additionally, OTP dependency presents issues when a user changes their mobile number or is in a network-limited area. This project introduces fingerprint verification to address these security concerns, utilizing the unique, durable, and nearly unalterable nature of human fingerprints.

## Project Objectives
- Eliminate reliance on mobile phones for OTP generation, offering a secure alternative for user authentication.
- Provide a secure, easy, and efficient transaction experience.
- Alert users and bank personnel when fraudulent attempts occur.
- Ensure high verification accuracy, even under challenging conditions, by enabling alternative fingerprint usage.
- Employ the Minutiae Matching Algorithm (MMA) for precise fingerprint matching.
- Ensure that only authorized users have access to their accounts.

## Project Deliverables
The project includes a secure online shopping web interface with standard e-commerce features such as registration, login, and product browsing. The fingerprint authentication process involves the following stages:
* Fingerprint Preprocessing: Grayscale conversion, Gaussian blur, thresholding, and skeletonization for precise feature extraction.
* Feature Extraction: Detection of minutiae points, specifically ridge endings and bifurcations, which are unique to each fingerprint.
* Fingerprint Matching: Verification using the Euclidean distance between sets of minutiae points.
* Data Storage: All user data, including fingerprint records, is securely stored in MySQL.
* Email Confirmation: Upon successful verification, a confirmation email is sent automaticlly to the registered email address.

## System Architecture
[![System Architecture](https://github.com/Sanju-Shrestha/Secure-Online-Shopping-Using-Fingerprint-Verification/blob/6b05227730d75d8b0d5423436eef113f3f3788e2/img/system-architecture.jpg)]

## Project Flow Diagram
[![Project Flow Diagram](https://github.com/Sanju-Shrestha/Secure-Online-Shopping-Using-Fingerprint-Verification/blob/6b05227730d75d8b0d5423436eef113f3f3788e2/img/flowchart.jpg)]

## Technologies Used
* Backend: Python (Fingerprint Processing and Matching)
* Database: MySQL (Secure data storage)
* Frontend: PHP, HTML, CSS (Web Interface)
* Server: XAMPP

## Project Setup
### Prerequisites
Ensure the following tools are installed:
* Python 3.x
* MySQL
* XAMPP (for running PHP and MySQL)

### Installation
1. Clone the repository and install the required Python packages.
```bash
git clone https://github.com/Sanju-Shrestha/Secure-Online-Shopping-Using-Fingerprint-Verification.git
cd Secure-Online-Shopping-Using-Fingerprint-Verification
pip install -r requirements.txt
```
2. Import the MySQL database structure (Database information in not shared in the repository to prevent the privacy of sensative informations. A sample data is provided in data/) and configure database settings in the application files as needed.
3. Move the contents of the htdocs folder to your local server's root directory to access the website.

## Project Modules
1. Fingerprint Preprocessing

File: trials/trial_01_preprocessing.py

Converts fingerprint images to grayscale, applies Gaussian blur, and uses thresholding and skeletonization for a binarized output that enhances feature extraction.

[![Fingerprint Verification](https://github.com/Sanju-Shrestha/Secure-Online-Shopping-Using-Fingerprint-Verification/blob/6b05227730d75d8b0d5423436eef113f3f3788e2/img/image_processing.png)]

2. Feature Extraction

File: trials/trial_02_feature_extraction.py

Extracts minutiae points, including ridge endings and bifurcations, from the skeletonized fingerprint image.

3. Fingerprint Matching

File: trials/trial_03_fingerprint_matching.py

Implements minutiae matching using Euclidean distances between minutiae sets. If distances fall below a threshold, the fingerprints are considered a match.

4. Fingerprint Verification

File: trials/trial_04_fingerprint_verification.py

Verifies new fingerprints by comparing them against stored fingerprint data. Authorized users are granted access only after successful verification.

5. Testing

File: trials/trial_05_test.py

Runs test cases to ensure accurate verification and security.

## Database Structure

MySQL is used to store sensitive data securely, including:
* User Information: Stores account information, including pre-registered fingerprints.
* Transaction Logs: Logs transaction attempts and alerts for fraud detection.

## Procedure

* Step 1: Open the website ‘BuyO Shop’
[![Step 1](https://github.com/Sanju-Shrestha/Secure-Online-Shopping-Using-Fingerprint-Verification/blob/6b05227730d75d8b0d5423436eef113f3f3788e2/img/step1.png)]

* Step 2: For the first time user, register in the website with unique username, email address and confidential password
[![Step 2](https://github.com/Sanju-Shrestha/Secure-Online-Shopping-Using-Fingerprint-Verification/blob/6b05227730d75d8b0d5423436eef113f3f3788e2/img/step2.png)]

* Step 3: If already registered, login to the website with the registered username, email address and password
[![Step 3](https://github.com/Sanju-Shrestha/Secure-Online-Shopping-Using-Fingerprint-Verification/blob/6b05227730d75d8b0d5423436eef113f3f3788e2/img/step3.png)]

* Step 4: Select the payment option: online or COD
[![Step 4](https://github.com/Sanju-Shrestha/Secure-Online-Shopping-Using-Fingerprint-Verification/blob/6b05227730d75d8b0d5423436eef113f3f3788e2/img/step4.png)]

* Step 5: If online transaction is selected, enter the required bank details
[![Step 5](https://github.com/Sanju-Shrestha/Secure-Online-Shopping-Using-Fingerprint-Verification/blob/6b05227730d75d8b0d5423436eef113f3f3788e2/img/step5.png)]

*Note: Fingerprint registration and steps to store password done by the banks' side are not mentioned*

* Step 6:Enter the same password used to store the fingerprint samples for verification
[![Step 6](https://github.com/Sanju-Shrestha/Secure-Online-Shopping-Using-Fingerprint-Verification/blob/6b05227730d75d8b0d5423436eef113f3f3788e2/img/step10.png)]

* Step 7: Place the finger on the device for verification
[![Step 7](https://github.com/Sanju-Shrestha/Secure-Online-Shopping-Using-Fingerprint-Verification/blob/6b05227730d75d8b0d5423436eef113f3f3788e2/img/step11.png)]

* Step 8: The fingerprint brightness can be also be adjusted
[![Step 8](https://github.com/Sanju-Shrestha/Secure-Online-Shopping-Using-Fingerprint-Verification/blob/6b05227730d75d8b0d5423436eef113f3f3788e2/img/step12.png)]  

## Conclusion
This project successfully demonstrates a secure and user-friendly online shopping experience by replacing OTP verification with fingerprint authentication. The system effectively addresses issues related to OTP-based authentication and offers a more reliable alternative for secure online transactions.

## License

This project is licensed under the MIT License - see the [LICENSE](https://github.com/Sanju-Shrestha/Secure-Online-Shopping-Using-Fingerprint-Verification/blob/6b05227730d75d8b0d5423436eef113f3f3788e2/LICENSE) file for details.

## Authors
Developed by: Sanju Shrestha, Mahip Raj K.C, Mallappa Dhavaleswar, and Sudheer Madhav.P.
