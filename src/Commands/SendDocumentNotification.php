<?php

namespace Nayem1108\DocumentManagement\commands;

use Illuminate\Console\Command;

class SendDocumentNotification extends Command
{
    protected $signature = 'document:notify {documentId}';
    protected $description = 'Send notification for a newly created document.';

    public function handle()
    {
        $documentId = $this->argument('documentId');
        // Logic to send notification for the document
        $this->info('Notification sent for document ID: ' . $documentId);
    }
}
