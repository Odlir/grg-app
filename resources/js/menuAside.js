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
  mdiReact
} from '@mdi/js';

export default [
    {
        route: 'dashboard',
        icon: mdiMonitor,
        label: 'Dashboard'
    },
    {
        route: 'person.index',
        label: 'Clientes',
        icon: mdiTable
    },
    {
        route: 'dashboard',
        label: 'Productos',
        icon: mdiSquareEditOutline
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
