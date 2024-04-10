# Poll.ayZ

![Static Badge](https://img.shields.io/badge/MADES_WITH-MYSQL-%234479a1?style=for-the-badge&labelColor=%236ca4cc&link=llayz.fr)  ![Static Badge](https://img.shields.io/badge/MADES_WITH-PHP-%2345a4b8?style=for-the-badge&labelColor=%2338c1d0&link=llayz.fr)  ![Static Badge](https://img.shields.io/badge/MADES_WITH-BOOTSTRAP_5-%238511fa?style=for-the-badge&labelColor=%23a652f9&link=llayz.fr)

Poll.ayZ is a simple polling application that allows users to create and participate in polls on various topics.

## Getting Started

To get started with Poll.ayZ, follow these steps:

### Prerequisites

Before getting started with Poll.ayZ, make sure you have the following:

- A local server such as WAMP, XAMPP, or equivalent.
- PHP version 8 or higher installed on your system.

### Installation

Follow these steps to install and set up Poll.ayZ on your development environment:

1. **Clone the repository:** Clone the Poll.ayZ repository from GitHub to your local machine:

   - Open your terminal or command prompt and use the following command to clone the Poll.ayZ repository:

     ```
     git clone https://github.com/llayz46/com.poll-app-project.git
     ```

2. **Create a local domain:** Create a domain for running the project locally:

    ### Windows:

    2.1. **Open the hosts file:** Navigate to the hosts file located at `C:\Windows\System32\drivers\etc\hosts`.
    
    2.2. **Edit the hosts file:** Open the hosts file with a text editor that has administrative privileges.
    
    2.3. **Add a new line:** Add the following line to define your local domain:
    
        ```
        127.0.0.1 myproject.local
        ```
    
        Replace `myproject.local` with the desired domain name for your project.
    
    2.4. **Save the hosts file:** After adding the new line, save the hosts file.
    
    2.5. **Flush DNS cache (optional):** To ensure immediate effect, flush the DNS cache by opening Command Prompt as administrator and running:
    
        ```
        ipconfig /flushdns
        ```

    ### macOS and Linux:

    For macOS and Linux distributions, you can achieve the same result by following similar steps. Here's a general guide:

    2.1. **Open the hosts file:** Navigate to the hosts file located at `/etc/hosts`.
    
    2.2. **Edit the hosts file:** Open the hosts file with a text editor with administrative privileges.
    
    2.3. **Add a new line:** Add the following line to define your local domain:
    
        ```
        127.0.0.1 myproject.local
        ```
    
        Replace `myproject.local` with the desired domain name for your project.
    
    2.4. **Save the hosts file:** After adding the new line, save the hosts file.

3. **Adding Virtual Host on your Apache Server**

    ### WAMP:

    3.1. **Open the httpd-vhosts.conf file:** Navigate to the httpd-vhosts.conf file located at `C:\wamp64\bin\apache\apache2.4.58\conf\extra\httpd-vhosts.conf`.
    
    3.2. **Edit the hosts file:** Open the hosts file with a text editor that has administrative privileges.
    
    3.3. **Adapt and add the following configuration:** Adapt the following configuration and add it to tell your Apache server where to point:
    
    ```
    <VirtualHost *:80>
      DocumentRoot "C:\wamp64\www\my_project"
      ServerName myproject.local
    </VirtualHost>
    ```

    ### XAMPP:

    3.1. **Open the httpd-vhosts.conf file:** Navigate to the httpd-vhosts.conf file located at `C:\xampp\apache\conf\extra\httpd-vhosts.conf`.
    
    3.2. **Edit the hosts file:** Open the hosts file with a text editor that has administrative privileges.
    
    3.3. **Adapt and add the following configuration:** Adapt the following configuration and add it to tell your Apache server where to point:
    
    ```
    <VirtualHost *:80>
        DocumentRoot "C:\xampp\htdocs\my_project"
        ServerName myproject.local
    </VirtualHost>
    ```

4. **Clone database and modify SQL request**

## Deployment

How to launch project

## Built with

- [WAMP](https://www.wampserver.com/) - Dependency Management
- [VSCode](https://code.visualstudio.com/) - Integrated Development Environment
- [Bootstrap5](https://getbootstrap.com/) - CSS Framework (front-end)

## Authors

- **layz** _alias_ [@llayz46](https://github.com/llayz46)
