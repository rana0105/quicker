<template>
    <data-viewer :source="source" :thead="thead" :filter="filter" :create="create" :title="title">
        <template scope="props">
            <tr @click="$router.push('/customer/' + props.item.id)">
                <td>{{props.item.id}}</td>
                <td>{{props.item.name}}</td>
                <td>{{props.item.phone}}</td>
                <td>{{props.item.email}}</td>
                <td>{{props.item.address}}</td>
            </tr>
        </template>
    </data-viewer>
</template>
<script>
    import DataViewer from '../../components/DataViewer.vue'

    export default {
        name: 'CustomerIndex',
        data() {
            return {
                title: 'Customers',
                source: '/api/customer',
                create: '/customer/create',
                thead: [
                    {title: 'ID', key: 'id', sort: true},
                    {title: 'Name', key: 'name', sort: true},
                    {title: 'Phone No', key: 'phone', sort: true},
                    {title: 'Email ID', key: 'email', sort: true},
                    {title: 'Address', key: 'address', sort: true},
                ],
                filter: [
                    'id', 'name','phone', 'email', 'address'
                ]
            }
        },
        components: {
            DataViewer
        }
    }
</script>