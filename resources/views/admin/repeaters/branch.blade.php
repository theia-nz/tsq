@twillRepeaterTitle('Branch')
@twillRepeaterTitleField('branch_name', ['hidePrefix' => false])
@twillRepeaterTrigger('Add Branch')

@formField('input', [
'name' => 'branch_name',
'label' => 'Branch Name',
'type' => 'text',
])

@formField('input', [
'name' => 'branch_address',
'label' => 'Branch Address',
'type' => 'textarea',
])

@formField('input', [
'name' => 'branch_latitude',
'label' => 'Branch Latitude',
])

@formField('input', [
'name' => 'branch_longitude',
'label' => 'Branch Longitude',
])

@formField('input', [
'name' => 'branch_phone',
'label' => 'Branch Phone',
'type' => 'text',
])

@formField('input', [
'name' => 'branch_email',
'label' => 'Branch Email',
'type' => 'email',
])