# Laravel A/B Testing Project

This Laravel project implements a basic A/B testing system, allowing us to test different variants of a webpage to determine which performs better in terms of user engagement and conversion rates. The project uses Laravel's built-in session management to assign a variant to a user's session and ensures the user consistently sees the same variant throughout their session.

## Features

- **A/B Test Management**: Create and manage A/B tests with multiple variants.
- **Session-based Variant Assignment**: Assigns variants to users based on defined targeting ratios, ensuring consistent experience during the session.

## Getting Started

These instructions will get your copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

```bash
- PHP >= 7.3
- Composer
- A web server like Nginx or Apache
- MySQL or another database system
