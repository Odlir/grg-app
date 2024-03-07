<script setup>
import { computed, ref, onMounted } from 'vue';
import { useMainStore } from '@/stores/main';
import {
    mdiAccountMultiple,
    mdiCartOutline,
    mdiChartTimelineVariant,
    mdiMonitorCellphone,
    mdiReload,
    mdiGithub,
    mdiChartPie
} from '@mdi/js';
import * as chartConfig from '@/components/Charts/chart.config.js';
import LineChart from '@/components/Charts/LineChart.vue';
import SectionMain from '@/components/SectionMain.vue';
import CardBoxWidget from '@/components/CardBoxWidget.vue';
import CardBox from '@/components/CardBox.vue';
import TableSampleClients from '@/components/TableSampleClients.vue';
import NotificationBar from '@/components/NotificationBar.vue';
import BaseButton from '@/components/BaseButton.vue';
import CardBoxTransaction from '@/components/CardBoxTransaction.vue';
import CardBoxClient from '@/components/CardBoxClient.vue';
import LayoutAuthenticated from '@/layouts/LayoutAuthenticated.vue';
import SectionTitleLineWithButton from '@/components/SectionTitleLineWithButton.vue';
import SectionBannerStarOnGitHub from '@/components/SectionBannerStarOnGitHub.vue';

const chartData = ref(null);

const fillChartData = () => {
    chartData.value = chartConfig.sampleChartData()
};

onMounted(() => {
    fillChartData();
})

const mainStore = useMainStore();

const clientBarItems = computed(() => mainStore.clients.slice(0, 4));

const transactionBarItems = computed(() => mainStore.history);

</script>

<template>
    <LayoutAuthenticated>
        <SectionMain>
            <SectionTitleLineWithButton :icon="mdiChartTimelineVariant" title="Overview" main>
<!--                <BaseButton
                    href="https://github.com/justboil/admin-one-vue-tailwind"
                    target="_blank"
                    :icon="mdiGithub"
                    label="Star on GitHub odlir"
                    color="contrast"
                    rounded-full
                    small
                />-->
            </SectionTitleLineWithButton>

            <div class="grid grid-cols-1 gap-6 lg:grid-cols-3 mb-6">
                <CardBoxWidget
                    trend="12%"
                    trend-type="up"
                    color="text-emerald-500"
                    :icon="mdiAccountMultiple"
                    :number="40"
                    label="Clientes"
                />
                <CardBoxWidget
                    trend="12%"
                    trend-type="up"
                    color="text-blue-500"
                    :icon="mdiCartOutline"
                    :number="30770"
                    prefix="S/."
                    label="Ventas"
                />
                <CardBoxWidget
                    trend="Overflow"
                    trend-type="alert"
                    color="text-red-500"
                    :icon="mdiChartTimelineVariant"
                    :number="256"
                    suffix="%"
                    label="Performance"
                />
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                <div class="flex flex-col justify-between">
                    <CardBoxTransaction
                        v-for="(transaction, index) in transactionBarItems"
                        :key="index"
                        :amount="transaction.amount"
                        :date="transaction.date"
                        :business="transaction.business"
                        :type="transaction.type"
                        :name="transaction.name"
                        :account="transaction.account"
                    />
                </div>
                <div class="flex flex-col justify-between">
                    <CardBoxClient
                        v-for="client in clientBarItems"
                        :key="client.id"
                        :name="client.name"
                        :login="client.login"
                        :date="client.created"
                        :progress="client.progress"
                    />
                </div>
            </div>

            <SectionBannerStarOnGitHub class="mt-6 mb-6" />

            <SectionTitleLineWithButton :icon="mdiChartPie" title="Vista Comparativa">
                <BaseButton :icon="mdiReload" color="whiteDark" @click="fillChartData" />
            </SectionTitleLineWithButton>

            <CardBox class="mb-6">
                <div v-if="chartData">
                    <line-chart :data="chartData" class="h-96" />
                </div>
            </CardBox>

            <SectionTitleLineWithButton :icon="mdiAccountMultiple" title="Clientes" />

            <CardBox has-table>
                <TableSampleClients />
            </CardBox>
        </SectionMain>
    </LayoutAuthenticated>
</template>

<<!--template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="mt-3 mb-7 w-100 h-screen rounded-lg bg-blue-300 dark:bg-inherit">
            <Welcome />
        </div>
    </AppLayout>
</template>-->
