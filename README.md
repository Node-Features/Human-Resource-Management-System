# Human Resource Management System (HRMS)

<p align="center">
  <strong>A web-based human resource management platform for managing employees, attendance, payroll-related records, performance, policies, and day-to-day HR operations.</strong>
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-7-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" />
  <img src="https://img.shields.io/badge/PHP-7%2B-777BB4?style=for-the-badge&logo=php&logoColor=white" />
  <img src="https://img.shields.io/badge/Category-HRMS-0A66C2?style=for-the-badge" />
</p>

---

## Overview

**HRMS** is a web-based Human Resource Management System designed to centralize common employee and administrative workflows.

The platform brings multiple HR functions into one system, helping organizations manage employee information, attendance, compensation-related records, performance, internal policies, and administrative processes more consistently.

The project demonstrates the design of a relatively broad business application with many connected HR domains rather than a single-purpose CRUD application.

---

# The Problem

Human-resource operations can become difficult to manage when employee information is distributed across spreadsheets, paper records, email, and disconnected systems.

Common problems include:

* Scattered employee records
* Manual attendance tracking
* Difficulty maintaining allowances and commissions
* Limited visibility into performance reviews
* Poor organization of internal policies
* Disconnected complaint and grievance processes
* Repetitive administrative work
* Difficulty enforcing user permissions

The HRMS project centralizes these workflows into one application.

---

# Core Capabilities

## 👥 Employee Management

The platform provides a structured foundation for maintaining employee-related information and connecting employees to other HR workflows.

Employee data can be associated with operational areas such as:

* Branches
* Attendance
* Payroll-related records
* Performance
* Awards
* Policies
* Complaints

---

## 🕒 Attendance Management

The application contains dedicated attendance models for tracking employee attendance records.

This helps organizations maintain a consistent history of employee attendance rather than relying entirely on manual records.

---

## 💰 Compensation & Benefits

The application includes several compensation-related domains, including:

* Allowances
* Allowance options
* Commissions
* Account-related records

These modules provide a foundation for organizing different components of employee compensation and financial administration.

---

## 📈 Performance Management

The platform includes appraisal functionality for employee performance management.

Performance records can be used to document and review employee performance over time.

---

## 🏆 Awards & Recognition

The system contains functionality for:

* Awards
* Award types

This provides a structured way to record employee recognition.

---

## 🏢 Organizational Structure

HR information can be organized using company structures such as:

* Branches
* Organizational units
* Employee relationships

This allows the system to reflect how employees are distributed within an organization.

---

## 📜 Company Policies

The platform includes company-policy functionality for maintaining internal organizational policies.

This gives HR teams a centralized way to manage and communicate important institutional rules and guidance.

---

## 🗣️ Complaints & Employee Relations

The HRMS contains complaint-management functionality for recording and managing employee-related concerns.

This helps formalize issues that would otherwise be handled only through informal communication.

---

## 📢 Announcements

The system includes announcement-related models, allowing organizations to distribute internal information to employees.

---

## 🔐 Roles & Permissions

The project uses role and permission infrastructure to control access to different areas of the system.

This is important in HR systems because sensitive employee and administrative data should only be accessible to authorized users.

---

# Technology Stack

## Backend

* PHP
* Laravel 7
* Laravel UI
* Eloquent ORM

## Authorization

* Spatie Laravel Permission

## Database

* Laravel migrations
* Relational database architecture

## Frontend

* Blade templates
* JavaScript
* Laravel frontend tooling

## Testing

* PHPUnit
* Mockery

## Development

* Composer
* npm
* Laravel Artisan

---

# Application Architecture

At a high level:

```text
Users
  │
  ▼
HRMS Web Application
  │
  ├── Authentication
  ├── Employee Management
  ├── Attendance
  ├── Compensation
  ├── Appraisals
  ├── Awards
  ├── Company Policies
  ├── Complaints
  ├── Announcements
  └── Administration
        │
        ▼
Laravel Application Layer
        │
        ├── Controllers
        ├── Models
        ├── Services / Business Logic
        ├── Authorization
        └── Database
```

---

# Domain Model

The project contains business models including:

```text
AccountList
Allowance
AllowanceOption
Announcement
AnnouncementEmployee
Appraisal
Asset
AttendanceEmployee
Award
AwardType
Band
Branch
Commission
CompanyPolicy
Complaint
...
```

This reflects a multi-domain HR application rather than a small demonstration project.

---

# Project Structure

A simplified repository structure:

```text
HRMS/
│
├── app/
│   ├── Models
│   ├── Http/
│   ├── Console/
│   └── ...
│
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
├── routes/
├── storage/
├── tests/
│
├── artisan
├── composer.json
├── package.json
└── README.md
```

---

# Running Locally

## Requirements

You will typically need:

```text
PHP 7.2.5+
Composer
Node.js / npm
A supported relational database
```

Clone the repository:

```bash
git clone https://github.com/Node-Features/HRMS.git
cd HRMS
```

Install PHP dependencies:

```bash
composer install
```

Install frontend dependencies:

```bash
npm install
```

Create the environment file:

```bash
cp .env.example .env
```

Generate the application key:

```bash
php artisan key:generate
```

Configure your database credentials in `.env`.

Run migrations:

```bash
php artisan migrate
```

Then start the application:

```bash
php artisan serve
```

---

# Security Considerations

HR systems handle sensitive employee information, so deployments should pay particular attention to:

* Authentication
* Role-based authorization
* Password security
* Database access control
* Protection of employee records
* Input validation
* Secure environment variables
* Auditability of administrative actions
* Dependency maintenance

Production credentials and personal employee data should never be committed to a public repository.

---

# Project Classification

**Category:** Legacy / Production-style Business Application

This repository is more substantial than a tutorial or demo because it contains a broad HR domain model and real business workflows.

If the system was actually deployed for an organization, this classification should be upgraded to:

**Production**

If it was primarily built for practice, study, or customization of an existing HRMS system, classify it as:

**Learning / Experimental**

---

# Current Status

The repository represents an earlier Laravel-based HR management project.

The current public version would benefit from:

* Updated framework dependencies
* Improved automated tests
* CI/CD
* Security review
* Better architecture documentation
* Screenshots
* Deployment documentation
* Clear ownership/origin documentation

---

# Author

**Mrisho Salum**

Software Engineer focused on backend systems, commerce infrastructure, payment systems, and systems engineering.

GitHub: [@Node-Features](https://github.com/Node-Features)

---

<p align="center">
  <strong>Centralizing people, processes, and HR operations into one system.</strong>
</p>
