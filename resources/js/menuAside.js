import {
  mdiAccountCircle,
  mdiMonitor,
  mdiGithub,
  mdiLock,
  mdiAlertCircle,
  mdiSquareEditOutline,
  mdiTable,
  mdiViewList,
  mdiTelevisionGuide,
  mdiResponsive,
  mdiPalette,
  mdiReact,
  mdiCubeOutline
} from '@mdi/js';

export default [
    {
        route: 'dashboard',
        icon: mdiMonitor,
        label: 'Dashboard'
    },
    {
        route: 'people.index',
        label: 'Clientes',
        icon: mdiTable
    },
    {
        route: 'products.index',
        label: 'Productos',
        icon: mdiSquareEditOutline
    },
    {
        route: 'products_category.index',
        label: 'Familia de productos',
        icon: mdiCubeOutline
    },
    {
        route: 'dashboard',
        label: 'Ventas',
        icon: mdiTelevisionGuide
    },
    {
        route: 'dashboard',
        label: 'Compras',
        icon: mdiResponsive
    },
    {
        route: '',
        label: 'Gastos',
        icon: mdiPalette
    },
    {
        route: 'dashboard',
        label: 'Inventario',
        icon: mdiAccountCircle
    },
    {
        route: 'login',
        label: 'Reportes',
        icon: mdiLock
    },
    {
        route: 'dashboard',
        label: 'Configuracion',
        icon: mdiAlertCircle
    },
    {
        label: 'Dropdown',
        icon: mdiViewList,
        menu: [
            {
                label: 'Item One'
            },
            {
                label: 'Item Two'
            }
        ]
    },
    {
        href: 'https://github.com/justboil/admin-one-vue-tailwind',
        label: 'GitHub',
        icon: mdiGithub,
        target: '_blank'
    },
    {
        href: 'https://github.com/justboil/admin-one-react-tailwind',
        label: 'React version',
        icon: mdiReact,
        target: '_blank'
    }
];
