import tableListComponent from './components/table/tableListComponent.vue';
import formComponent from './components/Form/formComponent.vue';
import EditUser from './components/edit/EditUser.vue';

export const routes = [{
        name: 'home',
        path: '/',
        component: tableListComponent
    },
    {
        name: 'create',
        path: '/create',
        component: formComponent
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditUser
    }
];