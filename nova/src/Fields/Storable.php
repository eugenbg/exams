<?php

namespace Laravel\Nova\Fields;

use RuntimeException;

trait Storable
{
    /**
     * The name of the disk the file uses by default.
     *
     * @var string|null
     */
    public $disk;

    /**
     * The file storage path.
     *
     * @var string
     */
    public $storagePath = '/';

    /**
     * Set the name of the disk the file is stored on by default.
     *
     * @param  string  $disk
     * @return $this
     */
    public function disk($disk)
    {
        $this->disk = $disk;

        return $this;
    }

    /**
     * Set the file's storage path.
     *
     * @param  string  $path
     * @return $this
     */
    public function path($path)
    {
        $this->storagePath = $path;

        return $this;
    }

    /**
     * Get the disk that the field is stored on.
     *
     * @return string|null
     */
    public function getStorageDisk()
    {
        return $this->disk;
    }

    /**
     * Get the default disk for the field.
     *
     * @return string
     */
    public function getDefaultStorageDisk()
    {
        return config('nova.storage_disk', 'public');
    }

    /**
     * Get the path that the field is stored at on disk.
     *
     * @return string|null
     */
    public function getStorageDir()
    {
        return $this->storagePath;
    }

    /**
     * Get the full path that the field is stored at on disk.
     *
     * @return string|null
     */
    public function getStoragePath()
    {
        throw new RuntimeException('You must implement getStoragePath method for deleting uploaded files.');
    }
}
