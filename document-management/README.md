# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/nayem1108/document-management.svg?style=flat-square)](https://packagist.org/packages/nayem1108/document-management)
[![Total Downloads](https://img.shields.io/packagist/dt/nayem1108/document-management.svg?style=flat-square)](https://packagist.org/packages/nayem1108/document-management)
![GitHub Actions](https://github.com/nayem1108/document-management/actions/workflows/main.yml/badge.svg)


This package provides a comprehensive solution for managing documents within a Laravel application. It includes essential features such as CRUD operations, event handling, and user notifications. Built with modern standards, this package supports PSR-1, PSR-2, and PSR-4, ensuring compatibility and ease of integration with other PHP libraries and frameworks. It is designed to be user-friendly and efficient, making it an ideal choice for developers looking to streamline document management tasks in their applications.


## Installation

You can install the package via composer:

```bash
composer require nayem1108/document-management
```

## Usage

To use the Document Management package, you will need to follow these steps:

1. **Import the Package**: In your controller, import the `Document` model provided by the package:

    ```php
    use Nayem1108\DocumentManagement\Models\Document;
    ```

2. **Creating a Document**: You can create a new document using the following code:

    ```php
    $document = Document::create([
        'title' => 'Document Title',
        'description' => 'Description of the document',
        'file_path' => 'path/to/document.pdf',
    ]);
    ```

3. **Retrieving Documents**: To retrieve all documents, use:

    ```php
    $documents = Document::all();
    ```

4. **Updating a Document**: Update an existing document by finding it first:

    ```php
    $document = Document::find($id);
    $document->update([
        'title' => 'Updated Title',
        'description' => 'Updated description',
    ]);
    ```

5. **Deleting a Document**: To delete a document, you can use:

    ```php
    $document = Document::find($id);
    $document->delete();
    ```

6. **Using Events**: You can listen for document events (like creation or deletion) in your application:

    ```php
    use Nayem1108\DocumentManagement\Events\DocumentCreated;

    Event::listen(DocumentCreated::class, function ($event) {
        // Handle the event (e.g., send a notification)
    });
    ```

7. **Blade View Integration**: In your Blade view, display the documents using DataTables, as previously described.

This package simplifies the management of documents in Laravel, making it easy to perform common operations with just a few lines of code.


### Testing

To ensure the functionality of the Document Management package, you can run the provided tests using PHPUnit. Follow these steps:

1. **Run Tests**: Execute the following command to run all tests:

    ```bash
    composer test
    ```

2. **Test Coverage**: To generate a code coverage report, use the following command:

    ```bash
    composer test-coverage
    ```

3. **Writing Tests**: You can find the test files located in the `tests` directory of the package. To add your own tests, create a new test class extending `Tests\TestCase` and place it in the appropriate directory. Here's an example of a basic test:

    ```php
    namespace Nayem1108\DocumentManagement\Tests;

    use Nayem1108\DocumentManagement\Models\Document;
    use Tests\TestCase;

    class DocumentTest extends TestCase
    {
        public function test_document_creation()
        {
            $document = Document::create([
                'title' => 'Test Document',
                'description' => 'A document for testing',
                'file_path' => 'path/to/test-document.pdf',
            ]);

            $this->assertDatabaseHas('documents', [
                'title' => 'Test Document',
            ]);
        }
    }
    ```

This testing framework ensures that your package is working as expected and helps you catch any issues early in the development process. Feel free to explore the existing tests for examples and best practices.


### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email nayem110899@gmail.com instead of using the issue tracker.

## Credits

-   [Nayem uddin](https://github.com/nayem1108)
-   [All Contributors](../../contributors)

## License

This package is licensed under the MIT License (MIT). You can view the full text of the license in the [License File](LICENSE.md).


By using this package, you agree to comply with the terms outlined in the license.


## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com). The boilerplate provides a solid foundation for developing Laravel packages, ensuring best practices and a structured approach to package development. 

Key features of the boilerplate include:

- **Standardized Structure**: Follows PSR standards for autoloading, coding style, and documentation.
- **Testing Setup**: Comes with a testing suite using PHPUnit to ensure your package functions correctly.
- **Easy Integration**: Designed for seamless integration with Laravel applications, making it easy to install and use.
- **Configuration Management**: Provides a straightforward way to manage package configuration settings.

Feel free to explore the boilerplate for additional features and tools that can enhance your package development experience.

