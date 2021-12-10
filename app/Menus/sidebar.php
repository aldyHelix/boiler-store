<?php

return [
  [
    'gate' => 'administrator.account',
    'name' => 'Account',
    'description' => 'Account Management System',
    'route' => null,
    'isActive' => null,
    'icon' => 'user-group',
    'id' => '',
    'gates' => [],
    'submenus' => [

      [
        'gate' => 'administrator.account.admin.index',
        'name' => 'User Admin',
        'route' => ['administrator.account.admin.index', []],
        'isActive' => 'account/admin*',
        'id' => '',
        'gates' => [
          [
            'gate' => 'administrator.account.admin.create',
            'title' => 'Create admin',
            'description' => 'User can create new admin'
          ],
          [
            'gate' => 'administrator.account.admin.update',
            'title' => 'Update admin',
            'description' => 'User can update admin'
          ],
          [
            'gate' => 'administrator.account.admin.destroy',
            'title' => 'Delete account',
            'description' => 'User can delete account'
          ]
        ],
      ]

    ]
  ],

  [
    'gate' => 'administrator.master-data',
    'name' => 'Master Data',
    'route' => null,
    'isActive' => 'master-data*',
    'icon' => 'database',
    'id' => '',
    'gates' => [],
    'submenus' => [
      [
        'gate' => 'administrator.master-data.category.index',
        'name' => 'Category',
        'route' => ['administrator.master-data.category.index', []],
        'isActive' => 'master-data/category*',
        'icon' => 'folder',
        'id' => '',
        'gates' => [
          [
            'gate' => 'administrator.master-data.category.create',
            'title' => 'Create Category',
            'description' => 'User can create new category'
          ],
          [
            'gate' => 'administrator.master-data.category.update',
            'title' => 'Update Category',
            'description' => 'User can update category'
          ],
          [
            'gate' => 'administrator.master-data.category.destroy',
            'title' => 'Delete Category',
            'description' => 'User can delete category'
          ]
        ],
      ],
      [
        'gate' => 'administrator.master-data.size.index',
        'name' => 'Size',
        'route' => ['administrator.master-data.size.index', []],
        'isActive' => 'master-data/size*',
        'icon' => 'folder',
        'id' => '',
        'gates' => [
          [
            'gate' => 'administrator.master-data.size.create',
            'title' => 'Create Size',
            'description' => 'User can create new size'
          ],
          [
            'gate' => 'administrator.master-data.size.update',
            'title' => 'Update Size',
            'description' => 'User can update size'
          ],
          [
            'gate' => 'administrator.master-data.size.destroy',
            'title' => 'Delete Size',
            'description' => 'User can delete size'
          ]
        ],
      ],
      [
        'gate' => 'administrator.master-data.ecommerce-link.index',
        'name' => 'Ecommerce Link',
        'route' => ['administrator.master-data.ecommerce-link.index', []],
        'isActive' => 'master-data/ecommerce-link*',
        'icon' => 'folder',
        'id' => '',
        'gates' => [
          [
            'gate' => 'administrator.master-data.ecommerce-link.create',
            'title' => 'Create Size',
            'description' => 'User can create new ecommerce-link'
          ],
          [
            'gate' => 'administrator.master-data.ecommerce-link.update',
            'title' => 'Update Size',
            'description' => 'User can update ecommerce-link'
          ],
          [
            'gate' => 'administrator.master-data.ecommerce-link.destroy',
            'title' => 'Delete Size',
            'description' => 'User can delete ecommerce-link'
          ]
        ],
      ],
    ]
  ],

  [
    'gate' => 'administrator.access',
    'name' => 'Access',
    'route' => null,
    'isActive' => null,
    'icon' => 'lock-open',
    'id' => '',
    'gates' => [],
    'submenus' => [

      [
        'gate' => 'administrator.access.role.index',
        'name' => 'Role',
        'route' => ['administrator.access.role.index', []],
        'isActive' => 'access/role*',
        'id' => '',
        'gates' => [
          [
            'gate' => 'administrator.access.role.create',
            'title' => 'Create Role',
            'description' => 'User can create new role'
          ],
          [
            'gate' => 'administrator.access.role.update',
            'title' => 'Update Role',
            'description' => 'User can update role'
          ],
          [
            'gate' => 'administrator.access.role.destroy',
            'title' => 'Delete Role',
            'description' => 'User can delete role'
          ]
        ],
      ],

      [
        'gate' => 'administrator.access.permission.index',
        'name' => 'Permission',
        'route' => ['administrator.access.permission.index', []],
        'isActive' => 'access/permission*',
        'id' => '',
        'gates' => [
          [
            'gate' => 'administrator.access.permission.show',
            'title' => 'Views detail Permission',
            'description' => 'User can view detail for all permission'
          ],
          [
            'gate' => 'administrator.access.permission.assign',
            'title' => 'Assign Permission',
            'description' => 'User can assign for all permission'
          ],

        ],
      ]
    ]
  ],

  [
    'gate' => 'administrator.system',
    'name' => 'System',
    'description' => 'System application control',
    'route' => null,
    'isActive' => null,
    'icon' => 'cog',
    'id' => '',
    'gates' => [],
    'submenus' => [
      [
        'gate' => 'administrator.system.activity.index',
        'name' => 'User Activity',
        'description' => 'List of User activity',
        'route' => ['administrator.system.activity.index', []],
        'isActive' => 'system/activity*',
        'id' => '',
        'gates' => [
          [
            'gate' => 'administrator.system.activity.delete',
            'title' => 'Delete',
            'description' => 'Delete log activity after 7 days'
          ],
        ]
      ],

      [
        'gate' => 'administrator.system.log.index',
        'name' => 'System Log',
        'description' => 'Display for Ladmin error log',
        'route' => ['administrator.system.log.index', []],
        'isActive' => 'system/log*',
        'id' => '',
        'gates' => []
      ]
    ]
  ]
];
