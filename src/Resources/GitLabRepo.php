<?php

namespace DreamFactory\Core\Git\Resources;

class GitLabRepo extends BaseResource
{
    const RESOURCE_NAME = '_repo';

    /** {@inheritdoc} */
    protected static function getResourceDefinition()
    {
        return [
            'type'       => 'object',
            'properties' => [
                'file_name'      => ['type' => 'string'],
                'file_path'      => ['type' => 'string'],
                'size'           => ['type' => 'integer'],
                'encoding'       => ['type' => 'string'],
                'content'        => ['type' => 'string'],
                'ref'            => ['type' => 'string'],
                'blob_id'        => ['type' => 'string'],
                'commit_id'      => ['type' => 'string'],
                'last_commit_id' => ['type' => 'string'],
            ]
        ];
    }
}