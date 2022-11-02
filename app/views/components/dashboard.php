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
          <div class="chart-config" style="display:none;">
            <select name="values">
              <option value="58.3"></option>
              <option value="20"></option>
              <option value="24"></option>
            </select>
            <select name="labels">
              <option value="Индонезия"></option>
              <option value="Таиланд"></option>
              <option value="Китай"></option>
            </select>
          </div>
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
          <div class="chart-filter">
            <form action="/" class="form">
              <div class="form-control">
                <label for="group">Страна</label>
                <select data-filter="group" name="group" id="group" class="custom-select" >
                  <option value="null" selected>Все</option>
                  <option value="th">Тайланд</option>
                  <option value="id">Индонезия</option>
                  <option value="mx">Мексика</option>
                </select>
              </div>
            </form>
          </div>
          <div class="chart-wrapper">
            <div class="chart-config" style="display:none;">
              <div data-group="null" data-set>
                <input type="text" name="label1" data-label value="Сегодня">
                <select name="values1" data-values>
                  <option value="2200"></option>
                  <option value="2400"></option>
                  <option value="3500"></option>
                  <option value="3000"></option>
                  <option value="3250"></option>
                  <option value="3490"></option>
                  <option value="2500"></option>
                  <option value="2400"></option>
                  <option value="2900"></option>
                  <option value="3000"></option>
                  <option value="3250"></option>
                  <option value="3490"></option>
                  <option value="3000"></option>
                </select>
              </div>
              <div data-group="null" data-set>
                <input type="text" name="label2" data-label value="Вчера">
                <select name="values2" data-values>
                  <option value="3000"></option>
                  <option value="2900"></option>
                  <option value="4000"></option>
                  <option value="3500"></option>
                  <option value="3750"></option>
                  <option value="3990"></option>
                  <option value="2900"></option>
                  <option value="3000"></option>
                  <option value="3500"></option>
                  <option value="3500"></option>
                  <option value="3750"></option>
                  <option value="3990"></option>
                  <option value="3500"></option>
                </select>
              </div>
              <div data-group="null" data-set>
                <input type="text" name="label3" data-label value="Позавчера">
                <select name="values3" data-values>
                  <option value="2400"></option>
                  <option value="2600"></option>
                  <option value="2700"></option>
                  <option value="2200"></option>
                  <option value="2450"></option>
                  <option value="2690"></option>
                  <option value="2700"></option>
                  <option value="2600"></option>
                  <option value="3100"></option>
                  <option value="3200"></option>
                  <option value="3450"></option>
                  <option value="2590"></option>
                  <option value="3200"></option>
                </select>
              </div>

              <div data-group="th" data-set>
                <input type="text" name="label1" data-label value="Сегодня">
                <select name="values1" data-values>
                  <option value="2200"></option>
                  <option value="2400"></option>
                  <option value="3500"></option>
                  <option value="3000"></option>
                  <option value="3250"></option>
                  <option value="3490"></option>
                  <option value="2500"></option>
                  <option value="2400"></option>
                  <option value="2900"></option>
                  <option value="3000"></option>
                  <option value="3250"></option>
                  <option value="3490"></option>
                  <option value="3000"></option>
                </select>
              </div>
              <div data-group="th" data-set>
                <input type="text" name="label2" data-label value="Вчера">
                <select name="values2" data-values>
                  <option value="3000"></option>
                  <option value="2900"></option>
                  <option value="4000"></option>
                  <option value="3500"></option>
                  <option value="3750"></option>
                  <option value="3990"></option>
                  <option value="2900"></option>
                  <option value="3000"></option>
                  <option value="3500"></option>
                  <option value="3500"></option>
                  <option value="3750"></option>
                  <option value="3990"></option>
                  <option value="3500"></option>
                </select>
              </div>
              <div data-group="th" data-set>
                <input type="text" name="label3" data-label value="Позавчера">
                <select name="values3" data-values>
                  <option value="2400"></option>
                  <option value="2600"></option>
                  <option value="2700"></option>
                  <option value="2200"></option>
                  <option value="2450"></option>
                  <option value="2690"></option>
                  <option value="2700"></option>
                  <option value="2600"></option>
                  <option value="3100"></option>
                  <option value="3200"></option>
                  <option value="3450"></option>
                  <option value="2590"></option>
                  <option value="3200"></option>
                </select>
              </div>

              <div data-group="id" data-set>
                <input type="text" name="label2" data-label value="Вчера">
                <select name="values2" data-values>
                  <option value="3000"></option>
                  <option value="2900"></option>
                  <option value="4000"></option>
                  <option value="3500"></option>
                  <option value="3750"></option>
                  <option value="3990"></option>
                  <option value="2900"></option>
                  <option value="3000"></option>
                  <option value="3500"></option>
                  <option value="3500"></option>
                  <option value="3750"></option>
                  <option value="3990"></option>
                  <option value="3500"></option>
                </select>
              </div>
              <div data-group="id" data-set>
                <input type="text" name="label3" data-label value="Позавчера">
                <select name="values3" data-values>
                  <option value="2400"></option>
                  <option value="2600"></option>
                  <option value="2700"></option>
                  <option value="2200"></option>
                  <option value="2450"></option>
                  <option value="2690"></option>
                  <option value="2700"></option>
                  <option value="2600"></option>
                  <option value="3100"></option>
                  <option value="3200"></option>
                  <option value="3450"></option>
                  <option value="2590"></option>
                  <option value="3200"></option>
                </select>
              </div>

              <div data-group="mx" data-set>
                <input type="text" name="label3" data-label value="Позавчера">
                <select name="values3" data-values>
                  <option value="2400"></option>
                  <option value="2600"></option>
                  <option value="2700"></option>
                  <option value="2200"></option>
                  <option value="2450"></option>
                  <option value="2690"></option>
                  <option value="2700"></option>
                  <option value="2600"></option>
                  <option value="3100"></option>
                  <option value="3200"></option>
                  <option value="3450"></option>
                  <option value="2590"></option>
                  <option value="3200"></option>
                </select>
              </div>

              <select name="labels">
                <option value="00:00"></option>
                <option value="02:00"></option>
                <option value="04:00"></option>
                <option value="06:00"></option>
                <option value="08:00"></option>
                <option value="10:00"></option>
                <option value="12:00"></option>
                <option value="14:00"></option>
                <option value="16:00"></option>
                <option value="18:00"></option>
                <option value="20:00"></option>
                <option value="22:00"></option>
              </select>
            </div>
            <canvas id="chart-line"></canvas>
          </div>
          <div class="chart-legend" id="chart-line-legend"></div>
        </div>
      </div>
    </div>
  </div>
</div>
