# MicroBlogging

## Setup Instructions

### Prerequisites
Install WSL 2 && Clone repo 🚩 on the Linux system 🚩
<br>
If you haven't already, install WSL 2. Refer to the [official WSL 2 documentation](https://learn.microsoft.com/en-us/windows/wsl/install).

**What is WSL 2?**
<br>
WSL (Windows Subsystem for Linux) allows you to run a Linux distribution alongside your Windows system, without a graphical interface. This Linux subsystem operates as a separate OS with its own command terminal and file system, independent of Windows.


**Why use WSL 2 for development?**
<br>
- Linux shell tools are the standard in modern development.
- Interacting with Windows files from WSL can cause significant slowdowns, especially when using Docker. By using WSL, you ensure a smoother development experience.

For more details on file storage and performance, see the [WSL file systems documentation](https://learn.microsoft.com/en-us/windows/wsl/filesystems#file-storage-and-performance-across-file-systems).

## [All Platforms] Install Docker

Install Docker from the [official Docker website](https://docs.docker.com/get-docker/).

**Windows users:** Choose the Docker installation option that includes WSL 2.

Ensure Docker is running locally:

```
docker info
```

## Cloning the Project on WSL

1. **Open the WSL Terminal**
2. **Navigate to Your WSL HOME Directory**
   ```
   cd ~
   ```
3. **Check Your Current Directory**
Ensure your current directory does not start with `/mnt/c/`.

- If it starts with `/mnt/c/`, , you're still on the Windows file system. For more details, refer to the WSL [file systems documentation](https://learn.microsoft.com/fr-fr/windows/wsl/filesystems#file-storage-and-performance-across-file-systems).
- Once you're in the WSL file system, navigate to or create your project directory and clone the project as usual.
  

##  Prerequisites for Windows / Mac / Linux: Setting Up the Development Environment
This project is pre-configured for quick and automatic installation of all dependencies (PHP CLI tools, Laravel, libraries, and relevant VSCode extensions). We will use the VSCode Dev Containers feature.


# Quick Setup Guide

## VSCode Setup

1. **Open Project in VSCode**
   - Open the project folder directly using "Open Folder" or `code .` to ensure the Dev Container extension works properly.

2. **Copy the Environment File**
   ```
   cp .env.example .env
   ```
3. **Install Dev Containers Extension**
4. **Reopen Project in Container**
Use the "Reopen in Container" command in VSCode.
Open Docker logs in VSCode to ensure there are no errors.


## Laravel Application Setup

<p><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="100" alt="Laravel Logo"></a></p>

1. **Ensure that the app is running inside the Docker container.**
2. **Install PHP Dependencies**
   ```
   composer install
   ```
3. **Generate Application Key**
   ```
   php artisan key:generate
   ```
This generates a key and stores it in the APP_KEY variable in .env.
3. **Start Laravel Server**
  ```
   php artisan serve
   ```
Open the provided URL (http://127.0.0.1:8000) to see the default Laravel page.

## Database Management (PostgreSQL)
1. **Access pgAdmin**
Inspect docker-compose.yml and .env for pgAdmin URL and credentials.
2. **Configure Database Connection**
Add a new server in pgAdmin with the host set to the service name defined in docker-compose.yml (e.g., pgsql).
3. **Initialize the Database**
   ```
   php artisan migrate
   ```
Run migrations to set up the database schema.
🎉 Congratulations! You now have a Laravel application running in Docker. Explore the Laravel documentation and tutorials to deepen your understanding.
