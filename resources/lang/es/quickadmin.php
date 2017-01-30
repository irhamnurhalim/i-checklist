<?php

return [
	'create' => 'Crear',
	'save' => 'Guardar',
	'edit' => 'Editar',
	'view' => 'Ver',
	'update' => 'Actualizar',
	'list' => 'Listar',
	'no_entries_in_table' => 'Sin valores en la tabla',
	'custom_controller_index' => 'Índice del controlador personalizado (index).',
	'logout' => 'Salir',
	'add_new' => 'Agregar',
	'are_you_sure' => 'Estás seguro?',
	'back_to_list' => 'Regresar a la lista?',
	'dashboard' => 'Tablero',
	'delete' => 'Eliminar',
	'quickadmin_title' => 'NTS-AR',
		'user-management' => [		'title' => 'User Management',		'fields' => [		],	],
		'roles' => [		'title' => 'Roles',		'fields' => [			'title' => 'Title',		],	],
		'users' => [		'title' => 'Users',		'fields' => [			'name' => 'Name',			'email' => 'Email',			'password' => 'Password',			'role' => 'Role',			'remember-token' => 'Remember token',		],	],
		'contact-management' => [		'title' => 'Contact Management',		'fields' => [		],	],
		'companies' => [		'title' => 'Companies',		'fields' => [			'name' => 'Company name',			'address' => 'Address',			'website' => 'Website',			'email' => 'Email',		],	],
		'contacts' => [		'title' => 'Contacts',		'fields' => [			'company' => 'Company',			'first-name' => 'First name',			'last-name' => 'Last name',			'phone1' => 'Phone 1',			'phone2' => 'Phone 2',			'email' => 'Email',			'skype' => 'Skype',			'address' => 'Address',		],	],
		'work-types' => [		'title' => 'Work types',		'fields' => [			'name' => 'Name',		],	],
		'projects' => [		'title' => 'Projects',		'fields' => [			'name' => 'Name',		],	],
		'time-entries' => [		'title' => 'Time entries',		'fields' => [			'work-type' => 'Work type',			'project' => 'Project',			'start-time' => 'Start time',			'end-time' => 'End time',		],	],
		'reports' => [		'title' => 'Reports',		'fields' => [		],	],
		'settings' => [		'title' => 'Settings',		'fields' => [		],	],
		'expense-category' => [		'title' => 'Expense Category',		'fields' => [			'name' => 'Name',		],	],
		'income-category' => [		'title' => 'Income category',		'fields' => [			'name' => 'Name',		],	],
		'income' => [		'title' => 'Income',		'fields' => [			'income-category' => 'Income Category',			'entry-date' => 'Entry date',			'amount' => 'Amount',		],	],
		'expense' => [		'title' => 'Expense',		'fields' => [			'expense-category' => 'Expense Category',			'entry-date' => 'Entry date',			'amount' => 'Amount',		],	],
		'monthly-report' => [		'title' => 'Monthly report',		'fields' => [		],	],
		'user-actions' => [		'title' => 'User actions',		'fields' => [			'user' => 'User',			'action' => 'Action',			'action-model' => 'Action model',			'action-id' => 'Action id',		],	],
		'activityreport' => [		'title' => 'Activity Report',		'fields' => [			'user' => 'User',			'datetime' => 'Date / Time',			'title' => 'Title',			'description' => 'Description',			'work' => 'Work',			'progress' => 'Progress',			'notes' => 'Notes',		],	],
		'product-management' => [		'title' => 'Product Management',		'fields' => [		],	],
		'categories' => [		'title' => 'Categories',		'fields' => [			'name' => 'Category name',			'description' => 'Description',			'photo' => 'Photo (max 8Mb)',		],	],
		'tags' => [		'title' => 'Tags',		'fields' => [			'name' => 'Name',		],	],
		'products' => [		'title' => 'Products',		'fields' => [			'name' => 'Product name',			'description' => 'Description',			'price' => 'Price',			'category' => 'Category',			'tag' => 'Tag',			'photo1' => 'Photo 1',			'photo2' => 'Photo 2',			'photo3' => 'Photo 3',		],	],
];