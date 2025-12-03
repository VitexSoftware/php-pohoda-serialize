# Copilot Instructions for PHP Pohoda Serialize

## Project Context
- **Purpose:** PHP library for serializing and deserializing Pohoda XML data
- **Target:** Czech accounting software Pohoda integration
- **Technology:** PHP 8.4+ library with XML handling capabilities

## Code Quality Standards

### Language Requirements
- **All code comments:** English only
- **All messages (including errors):** English only
- **PHP Version:** 8.4 or later required
- **Coding Standard:** PSR-12 compliance mandatory

### Documentation Requirements
- **Functions and classes:** Must include complete docblocks
  - Purpose description
  - Parameter types and descriptions
  - Return type specification
- **General documentation:** Markdown format
- **Comments:** Complete sentences with proper grammar

### Testing Requirements
- **Test framework:** PHPUnit
- **Coverage:** Unit tests for all new/modified classes
- **Standard:** Follow PSR-12 in test files
- **Mandatory:** Create/update test files when modifying classes

### Development Best Practices
- **Variable names:** Must be meaningful and descriptive
- **Magic values:** Define constants instead of magic numbers/strings
- **Exception handling:** Proper error handling with meaningful messages
- **Type safety:** Include type hints for all parameters and returns
- **Internationalization:** Use `_()` functions for translatable strings
- **Security:** Never expose sensitive information
- **Performance:** Optimize where necessary
- **Compatibility:** Ensure latest PHP and library compatibility
- **Maintainability:** Follow established best practices

## Validation Process
- **PHP Syntax Check:** After every PHP file edit, **mandatory** run:
  ```bash
  php -l <filename>
  ```
- **Why:** Ensures code sanity and catches syntax errors early

## Example Commands
```bash
# Syntax check
php -l src/PohodaSerializer.php

# Run tests
vendor/bin/phpunit tests/

# Check PSR-12 compliance
vendor/bin/php-cs-fixer fix --dry-run
```

