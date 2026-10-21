# TascaS1.08
PHP Testing with PHPUnit & TDD

# TascaS1.08
Exercises to learn Test-Driven Development (TDD) and Unit Testing with PHPUnit
Automated Testing, Data Providers, PHPUnit Attributes, and TDD Workflow

# 🐘 PHP Testing & Test-Driven Development (TDD)
Welcome to my PHP learning repository! This space is dedicated to collecting practical exercises, code challenges, and advanced concepts regarding Unit Testing and Test-Driven Development (TDD) that I develop as I progress through my training by ITAcademy.

## 🚀 Development Environment
- **PHP** (Version 8.4)
- **PHPUnit** (Version 11.5.57)
- **Editor:** Visual Studio Code
- **Dependency Manager:** Composer

## 📂 Repository Structure
The project is organized by difficulty levels according to the assignment requirements:

- **nivel1/** : Core unit testing foundations and TDD implementation.
  - `ejercicio1/` : Unit tests for the `NumberChecker` class, verifying its internal logic (such as checking even/odd numbers) using modern PHPUnit 11 `#[DataProvider]` attributes to ensure maximum code efficiency and test coverage.
  - `ejercicio2/` : Design and implementation of a vehicle speed sensor logic built strictly from scratch using TDD. The code categorizes inputs into five distinct speed thresholds (<30 km/h: Very slow, 30-60 km/h: Adequate speed, 61-80 km/h: Mild excess, 81-100 km/h: Moderate excess, >100 km/h: Severe excess).

## 🛠️ How to Run This Project
Unlike previous modules, this project relies on **PHPUnit** to execute automated tests directly from the Command Line Interface (CLI). Follow these steps to set up and execute the code:

1. **Clone this repository:** 
   Navigate to your local projects directory and clone the repository:
   ```bash
   git clone https://github.com/JoseBermejo-N/TascaS1.08.git
   cd TascaS1.08
   ```

2. **Install Dependencies:**
   Ensure you have Composer installed globally. You can set up the project dependencies in two ways:
   
   **If the `composer.json` file is already present:**
     ```bash
     composer install
     ```
   **If you need to install PHPUnit 11 manually from scratch:**
   ```bash
   composer require phpunit/phpunit:^11.5 --dev

3. **Run the Test Suite:** 
   You can execute all the tests in the project or target specific folders using the vendor binary:
   
   - **Run all tests:**
     ```bash
     ./vendor/bin/phpunit
     ```
   - **Run a specific exercise suite:**
     ```bash
     ./vendor/bin/phpunit nivel1/ejercicio1/test/NumberCheckerTest.php
     ./vendor/bin/phpunit nivel1/ejercicio2/test/SpeedSensorTest.php
     ```

---

Jose - @JoseBermejo-N
# TascaS1.08
Testing on PHP
