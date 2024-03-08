/**
 * This file contains JavaScript for the editor and frontend
 *
 */

/*
 * Core blocks customization
 */

/** the property sets position absolute for to a group */
wp.blocks.registerBlockStyle('core/group',
    {
        name: 'header-fixed',
        label: 'Fixed Header',
    }
);

/** add padding for a search field */
wp.blocks.registerBlockStyle('core/search',
    {
        name: 'high-search',
        label: 'High Search',
    }
);

/** core/categories modern list */
wp.blocks.registerBlockStyle('core/categories',
    {
        name: 'modern-list',
        label: 'Modern List',
    }
);

/** core/query-pagination-numbers modern list */
wp.blocks.registerBlockStyle('core/query-pagination-numbers',
    {
        name: 'rounded-numbers',
        label: 'Rounded',
    }
);