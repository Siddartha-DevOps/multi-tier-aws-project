# Multi-Tier Web Application using EC2 & RDS

## Overview
This project demonstrates deploying a PHP/MySQL application on AWS using:
- EC2 for the web server
- RDS for the database
- Nginx + PHP-FPM for serving dynamic content

## Architecture
EC2 → Nginx/PHP → RDS (MySQL)

## Setup
See [commands.sh](./commands.sh) for step-by-step installation and configuration.

## Screenshots
![Deployment Screenshot](./screenshots.png)

## Future Enhancements
- Add load balancer
- Enable HTTPS with SSL
- Auto-scaling group
