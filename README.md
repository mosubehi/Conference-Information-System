# Conference-Information-System

## Overview
This project is a Conference Information System built using PHP and MySQL. It includes functionalities for managing conference participants and administrators.

## User Credentials
### Admin
- **Username:** admin@gmail.com
- **Password:** 123456
- **ID:** 11111

### Participant
- **Username:** participant@gmail.com
- **Password:** 123456
- **ID:** 22222




## Database Schema

### Tables
1. **Conference_participant**
   - `Pid` (Primary Key)
   - `Pssn`
   - `Pfname`
   - `Plname`
   - `Pbod`
   - `P_project_name`
   - `Psex`
   - Additional participant-related fields...

2. **Participant_userName**
   - `PID` (Foreign Key)
   - `Pemail` (Unique, used as Username)
   - `Ppassword`

3. **Conf_Admin**
   - `Aid` (Primary Key)
   - `Auname` (Admin Email, used as Username)
   - `Apassword`

## Project Structure

### Login Page (`login.php`)
- **Validation Requirements:**
  - Password must be alphanumeric with a minimum length of 6 characters.
  - Username is the participant’s or admin’s email.

### Admin Operations
- **Add Participant (`admin_add.php`)**
- **Delete Participant (`admin_delete.php`)**
- **Update Participant (`admin_update.php`)**
- **Search Participant (`admin_search.php`)**
- **Display All Participants (`admin_display_all.php`)**

### Participant Operations
- **Login (`participant_login.php`)**
- **Logout (`participant_logout.php`)**
- **Send Comment and Attach File (`participant_comment.php`)**
- **Display Information (`participant_display.php`)**
- **Update Information (`participant_update.php`)**
- **Delete Information (`participant_delete.php`)**


