# Hospital Appointment Booking System

## Overview
This project simulates an online hospital appointment booking system. It provides users with the ability to book appointments with doctors in various medical specialties, ensuring a seamless user experience for both patients and administrators. The system allows users to select a doctor, choose an appointment date and time, provide personal contact details, and request a call-back at a preferred time. The system checks for availability and avoids double-booking of appointments.

## Features
- **Personal Information Submission**: Collects user details such as full name, email address, and phone number.
- **Appointment Scheduling**: Users can select an appointment date and time from available slots, preventing scheduling conflicts.
- **Doctor Selection**: Allows patients to choose a doctor from a predefined list of specialties and doctors.
- **Call-back Request**: Users can specify their preferred call-back time for further communication.
- **Data Validation**: Input fields are validated on the client side using JavaScript and on the server side using PHP to ensure correctness (e.g., phone number format, email validity).
- **Database Integration**: Stores user data (personal information, appointment details) securely in a MySQL database.
- **Security Measures**: Prevents SQL injection and other common threats by using prepared statements for database queries.
  
## Technologies Used
- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL
- **Version Control**: Git (for code versioning and collaboration)
