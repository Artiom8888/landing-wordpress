# PetProjectOne WordPress Theme

A modern, responsive WordPress landing page theme.

## Theme Location
The theme is located in the `htdocs/wp-content/themes/petprojectone` directory.

## Database Setup
1. A database dump file is provided with the theme
2. Import the included database file using:
   - phpMyAdmin: Import feature
   - MySQL command line:
     ```bash
     mysql -u your_username -p your_database_name < database_dump.sql
     ```
3. Update WordPress configuration:
   - Modify `wp-config.php` with your database credentials
   - Update site URL if necessary

## Key Features

- **Responsive Design**
  - Fluid layouts optimized for mobile, tablet, and desktop viewports
  - Mobile-first approach ensuring consistent performance
  - Touch-friendly navigation and interactive elements

- **Form Integration**
  - Seamless Contact Form 7 integration
  - Custom styling matching theme aesthetics

## Prerequisites

- WordPress 5.0 or higher
- PHP 7.4+ (recommended: PHP 8.0+)
- MySQL 5.6+ or MariaDB 10.1+
- Compatible theme framework (recommended: Astra or GeneratePress)

### Required Plugins
- Pods - Advanced content types and fields
- WP Mail SMTP - Reliable email delivery
- Contact Form 7 - Form management and processing

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/Artiom8888/landing-wordpress.git
   ```

2. Theme Installation:
   - Copy the `petprojectone` folder from `htdocs/wp-content/themes/` to your WordPress themes directory
   - Alternatively, create a ZIP of the `petprojectone` folder and upload via WordPress Dashboard

3. Database Setup:
   - Create a new MySQL database
   - Import the provided database dump file
   - Update wp-config.php with new database credentials

4. Install and activate required plugins through WordPress Admin:
   - Navigate to Plugins → Add New
   - Search for and install each required plugin
   - Activate all installed plugins

5. Activate Theme:
   - Go to Appearance → Themes
   - Locate "PetProjectOne"
   - Click "Activate"

## Development

### Technology Stack
- WordPress Core
- PHP 7.4+
- Modern HTML5/CSS3
- JavaScript
- MySQL/MariaDB

## Deployment Options

### FTP Deployment
- Use FileZilla or similar FTP client
- Upload files to your hosting environment
- Maintain file permissions (644 for files, 755 for directories)

### WordPress Dashboard
- Package theme as ZIP file
- Upload via Appearance → Themes
- Activate and configure

## Hosting

For testing and development, you can use [InfinityFree](https://infinityfreeapp.com) which offers:
- Free WordPress hosting
- Custom domain support
- MySQL databases
- PHP 8.0 support