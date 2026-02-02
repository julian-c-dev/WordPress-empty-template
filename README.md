# README

## Environments

- **Staging**: [https://emptycapital.makestaging.com/](https://emptycapital.makestaging.com/)
- **Production**: Coming soon.

## Project Details

This project is built with **Tailwind CSS** for styling and uses **Husky** to ensure code quality by enforcing WordPress coding standards before committing changes.
If the code doesn't meet WordPress standards, the commit will fail. Fix the issues and try again.

### Code Quality via Composer
  ```bash
// Individual checks:
npm run-script composer-lint
npm run-script composer-format

// Both (Husky automatically runs wplint before every commit):
npm run-script wplint
 ```
## Commands

### Tailwind CSS

- **Watch for changes (development)**:  
  ```bash
  npm run watch:style
