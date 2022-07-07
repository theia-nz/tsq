@twillRepeaterTitle('Recipient')
@twillRepeaterTitleField('name', ['hidePrefix' => false])
@twillRepeaterTrigger('Add Recipient')

@formField('input', [
'name' => 'name',
'label' => 'Name',
'type' => 'text',
'translated' => true,
])

@formField('input', [
'name' => 'email',
'label' => 'Email',
'type' => 'email',
'translated' => true,
])