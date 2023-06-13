<?php

return [
    'api_key' => env('COCONUT_API_KEY', null),

    /**
     * Default storage
     */
    'storage' => 'gcs',

    'storages' => [

        /**
         * Google cloud storage https://docs.coconut.co/jobs/storage#google-cloud-storage
         */
        'gcs' => [
            'service' => 'gcs',
            'bucket' => env('COCONUT_GCS_BUCKET', null),
            'credentials' => [
                'access_key_id' => env('COCONUT_GCS_KEY', null),
                'secret_access_key' => env('COCONUT_GCS_SECRET', null)
            ],
            'path' => '/'
        ],

        /**
         * AWS S3 storage https://docs.coconut.co/jobs/storage#aws-s3
         */

        'aws-s3' => [
            'service' => 's3',
            'region' => env('COCONUT_S3_REGION', null),
            'bucket' => env('COCONUT_S3_BUCKET', null),
            'credentials' => [
                'access_key_id' => env('COCONUT_S3_KEY', null),
                'secret_access_key' => env('COCONUT_S3_SECRET', null)
            ],
            'path' => '/'
        ]

    ],

    /**
     * Middlewares to add to the webhook route
     */
    'middleware' => []


];
