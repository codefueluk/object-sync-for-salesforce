# Extending before and after saving

When the plugin saves data, either on a `push` or `pull` event, it has a few actions that can be run that don't change any of the data the plugin is dealing with, but do allow developers to do additional things.

Each event has an action that runs right before data is saved, and then right after there is one for a successful save and one for a failed save.

## Salesforce Pull

The action hooks that run on around the save on a `pull` event are:

- `salesforce_rest_api_pre_pull`
- `salesforce_rest_api_pull_fail`
- `salesforce_rest_api_pull_success`

### Code examples

#### Before pull

```
add_action( 'salesforce_rest_api_pre_pull', 'before_pull', 10, 5 );
function before_pull( $wordpress_id, $mapping, $object, $object_id, $params ) {
    // do things before the plugin saves any data in wordpress
    // $wordpress_id is the object id
    // $mapping is the field map between the object types
    // $object is the object data
    // $object_id is the id field's name
    // $params is the data mapping between the two systems
}
```

#### After fail

```
add_action( 'salesforce_rest_api_pull_fail', 'pull_fail', 10, 5 );
function pull_fail( $op, $result, $synced_object ) {
    // do things if the save failed
    // $op is what the plugin tried to do - create, update, upsert, delete
    // $result is what was returned by the $wordpress class
    // $synced_object is an array like this:
    /*
    $synced_object = array(
        'salesforce_object' => $object,
        'mapping_object' => $mapping_object,
        'mapping' => $mapping,
    );
    */
}
```

#### After success

```
add_action( 'salesforce_rest_api_pull_success', 'pull_success', 10, 3 );
function pull_success( $op, $result, $synced_object ) {
    // do things if the save succeeded
    // $op is what the plugin did - create, update, upsert, delete
    // $result is what was returned by the $wordpress class
    // $synced_object is an array like this:
    /*
    $synced_object = array(
        'salesforce_object' => $object,
        'mapping_object' => $mapping_object,
        'mapping' => $mapping,
    );
    */
}
```

## Salesforce Push

The action hooks that run on around the save on a `push` event are:

- `salesforce_rest_api_pre_push`
- `salesforce_rest_api_push_fail`
- `salesforce_rest_api_push_success`