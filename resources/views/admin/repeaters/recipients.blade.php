@twillRepeaterTitle('Recipient')
@twillRepeaterTitleField('name', ['hidePrefix' => false])
@twillRepeaterTrigger('Add Recipient')

@formField('input', [
'name' => 'name',
'label' => 'Name',
'type' => 'text',
])

@formField('input', [
'name' => 'email',
'label' => 'Email',
'type' => 'email',
])