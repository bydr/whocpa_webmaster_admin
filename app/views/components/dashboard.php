<section class="page">
    <div class="dashboard">
        <div class="panel-stats">
            <div class="panel-inner">
                <div class="panel-header panel-header_underline">
                    <p class="text-size_default"><b>Количество партнеров</b></p>
                </div>
                <div class="panel-body">
                    <div class="panel-row">
                        <div class="panel-col">
                            <div class="stats-indicator stats-indicator_col">
                                <div class="stats-indicator__name">Сегодня:</div>
                                <div class="stats-indicator__number c-accent">791</div>
                            </div>
                        </div>
                        <div class="panel-col">
                            <div class="stats-indicator stats-indicator_col">
                                <div class="stats-indicator__name">Всего:</div>
                                <div class="stats-indicator__number c-secondary">9621</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-stats">
            <div class="panel-inner">
                <div class="panel-header panel-header_underline">
                    <p class="text-size_default"><b>Количество лидов</b></p>
                </div>
                <div class="panel-body">
                    <div class="panel-row">
                        <div class="panel-col">
                            <div class="stats-indicator stats-indicator_col">
                                <div class="stats-indicator__name">Сегодня:</div>
                                <div class="stats-indicator__number c-accent">364</div>
                            </div>
                        </div>
                        <div class="panel-col">
                            <div class="stats-indicator stats-indicator_col">
                                <div class="stats-indicator__name">Всего:</div>
                                <div class="stats-indicator__number c-secondary">7234</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-stats panel_pie-leads">
            <div class="panel-inner">
                <div class="panel-header panel-header_underline">
                    <a href="#" class="link link_decoration link_dark_accent text-size_default"><b>Лиды по странам</b></a>
                </div>
                <div class="panel-body">
                    <div class="chart chart_pie">
                        <div class="chart-wrapper">
                            <canvas id="chart-lead-country" width="200" height="200"></canvas>
                        </div>
                        <div class="chart-legend" id="chart-lead-country-legend"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-stats panel_crm">
            <div class="panel-inner">
                <div class="panel-header">
                    <a href="#" class="link link_decoration link_dark_accent text-size_default"><b>CRM</b></a>
                </div>
                <div class="panel-body">
                    <div class="panel-row">
                        <div class="panel-col">
                            <div class="stats-indicator">
                                <div class="stats-indicator__name">Красные</div>
                                <div class="stats-indicator__number c-accent">912</div>
                            </div>
                        </div>
                        <div class="panel-col">
                            <div class="stats-indicator">
                                <div class="stats-indicator__name">Желтые</div>
                                <div class="stats-indicator__number c-accent">396</div>
                            </div>
                        </div>
                        <div class="panel-col">
                            <div class="stats-indicator">
                                <div class="stats-indicator__name">Зеленые</div>
                                <div class="stats-indicator__number c-accent">189</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-stats panel_last-tickets">
            <div class="panel-inner">
                <div class="panel-header">
                    <p class="text-size_default">
                        <b>Последние <a href="#" class="link link_decoration link_dark_accent">тикеты</a></b>
                    </p>
                </div>
                <div class="panel-body">
                    <div class="panel-row">
                        <div class="entity__list">
                            <div class="entity__item">
                                <div class="entity__col">
                                    <p class="text-size_medium c-gray-darken"><b>Подключение оффера</b></p>
                                </div>
                                <div class="entity__col justify-center">
                                    <p class="text-size_medium c-gray-darken font-family_secondary"><b>09.09.2021</b></p>
                                </div>
                                <div class="entity__col justify-end">
                                    <a href="#" class="link link_decoration link_dark_accent"><b>Посмотреть</b></a>
                                </div>
                            </div>
                            <div class="entity__item">
                                <div class="entity__col">
                                    <p class="text-size_medium c-gray-darken"><b>Подключение оффера</b></p>
                                </div>
                                <div class="entity__col justify-center">
                                    <p class="text-size_medium c-gray-darken font-family_secondary"><b>09.09.2021</b></p>
                                </div>
                                <div class="entity__col justify-end">
                                    <a href="#" class="link link_decoration link_dark_accent"><b>Посмотреть</b></a>
                                </div>
                            </div>
                            <div class="entity__item">
                                <div class="entity__col">
                                    <p class="text-size_medium c-gray-darken"><b>Подключение оффера</b></p>
                                </div>
                                <div class="entity__col justify-center">
                                    <p class="text-size_medium c-gray-darken font-family_secondary"><b>09.09.2021</b></p>
                                </div>
                                <div class="entity__col justify-end">
                                    <a href="#" class="link link_decoration link_dark_accent"><b>Посмотреть</b></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-stats panel_compare_leads">
            <div class="panel-inner">
                <div class="panel-header panel-header_underline">
                    <p class="text-size_default"><b>Статистика сравнения количества лидов</b></p>
                </div>
            </div>
            <div class="panel-body">
                <div class="panel-body">
                    <div class="chart chart_line">
                        <div class="chart-wrapper">
                            <template class="chart-config">
                                <input type="text" name="step" value="2">
                                <select name="" id="">
                                    <option value=""></option>
                                </select>
                            </template>
                            <canvas id="chart-line"></canvas>
                        </div>
                        <div class="chart-legend" id="chart-line-legend"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
