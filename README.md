# Mentorin Education CBT Simulator

## About the Website
Mentorin Education CBT Simulator is a comprehensive platform designed for simulation exams, tryouts, and selection tests tailored for entry into law enforcement, military, and civil service positions. Equipped with all the features needed to help students prepare, the platform provides:

- Progress tracking for test results
- Test history and score recaps
- Practice questions with discussions
- Complete study materials

The test interfaces are meticulously designed to replicate the original exams, including identical time limits. Payment integration is fully automated, ensuring a seamless user experience.

This website is developed for **mentorineducation.id** using Laravel 11, Laravel Breeze for authentication, and Midtrans for payment integration. The interface is built with Bootstrap and jQuery.

## Screenshots
### Dashboard User
![Image](https://github.com/user-attachments/assets/debbea37-596e-46eb-a344-e93d5eae9aa0)

### Interface CBT Standar
![Image](https://github.com/user-attachments/assets/2aeadece-73e9-40c5-8602-8dc28b624f8d)

### Interface CBT Psikologi Kecermatan POLRI
![Image](https://github.com/user-attachments/assets/e105804c-2211-4d23-bc3e-147ff44ef0f6)

### Hasil Tes
![Image](https://github.com/user-attachments/assets/31523925-625a-4b16-a228-04ce0f88f526)


### Pembahasan Soal
![Image](https://github.com/user-attachments/assets/d97048bc-0b05-4219-8182-72a316be161e)

### Dashboard Admin
![Image](https://github.com/user-attachments/assets/448610ff-7b18-4703-9cad-3f204fb2f2b4)

## How to Install and Run

1. **Install PHP**
   - Make sure PHP is installed and can be executed via the command line.

2. **Install MySQL**
   - Install a MySQL database server.

3. **Create a Database**
   - Open your MySQL interface and create a database named `mentorineducatio_mentorin`.

4. **Clone the Repository**
   - Clone the project repository to your local machine.

5. **Import the Database**
   - Locate the `mentorineducatio_mentorin.sql` file in the project folder.
   - Import it into your database using one of the following methods:
     - **Using phpMyAdmin**:
       1. Open phpMyAdmin and select the `mentorineducatio_mentorin` database.
       2. Click on the "Import" tab.
       3. Choose the `mentorineducatio_mentorin.sql` file and click "Go."
     - **Using a GUI Database Tool (e.g., MySQL Workbench):**
       1. Open your database tool and connect to your MySQL server.
       2. Right-click on the `mentorineducatio_mentorin` database and select "Import."
       3. Locate the `mentorineducatio_mentorin.sql` file and follow the import instructions.

6. **Configure the Environment File**
   - Edit the `.env` file and update the following fields with your MySQL credentials:
     ```env
     DB_HOST=your_database_host
     DB_PORT=your_database_port
     DB_DATABASE=mentorineducatio_mentorin
     DB_USERNAME=your_database_username
     DB_PASSWORD=your_database_password
     ```

7. **Run Database Migrations**
   - Refresh the database schema using:
     ```bash
     php artisan migrate:fresh
     ```

8. **Start the Development Server**
   - Run the server with:
     ```bash
     php artisan serve
     ```

9. **Access the Application**
   - Open your web browser and go to `http://localhost:8000` to begin using Mentorin Education CBT Simulator.

