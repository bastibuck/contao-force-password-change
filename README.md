# Contao: Force Password Change

Extension for Contao Open Source CMS that forces members to change their password after first login

[![Latest Stable Version](https://poser.pugx.org/bastibuck/contao-force-password-change/v/stable)](https://packagist.org/packages/bastibuck/contao-force-password-change)
[![Total Downloads](https://poser.pugx.org/bastibuck/contao-force-password-change/downloads)](https://packagist.org/packages/bastibuck/contao-force-password-change)
[![License](https://poser.pugx.org/bastibuck/contao-force-password-change/license)](https://packagist.org/packages/bastibuck/contao-force-password-change)

## Description

With this extension you can redirect members to a page as long as they haven't changed the initial password (probably provided by the admin).

As long as the member hasn't changed the password it will always be redirected to that page (no matter what page of your website the member tries to visit). After changing the password successfully the member will be able to use the internal services as intended.

## Installation
1. Create a new page for the change password module
2. Create another (optional) page to redirect the member to after changing the password (using it to display a simple text "Password changed"
3. Create a member group
4. Check and set the "force password change" settings by choosing a jump-to page
5. Assign members to that group
6. Create a new module of type "Change Password"
7. You can add optional headline, description and redirect page
8. Embed the module on the created page members will be redirected
