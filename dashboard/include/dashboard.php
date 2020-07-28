<div id="fetchData" style="display: none;">
  <?php include "sql/fetch_chart_data.php"; ?>
</div>

<div class="gridContainer">
  <header id="header">
    <a href="https://www.maxwell.syr.edu/" target="_blank"><img src="./assets/MaxwellWM.O_DG.rgb.png"
           alt="Link to the website of Syracuse University Maxwell Schoool of Citizenship and Public Affairs."></a>
    <h1>Data Dashboard</h1>

    <div class="dropdown is-right is-active">
      <div class="dropdown-trigger">
        <button class="button" aria-haspopup="true" aria-controls="dropdown-menu2">
          <span class="icon is-small">
            <i class="fas fa-bars" aria-hidden="true"></i>
          </span>
        </button>
      </div>

      <div class="dropdown-menu" id="dropdown-menu2" role="menu">
        <div class="dropdown-content">
          <div id="download-csv" class="dropdown-item">
            <a href="#">Download CSV</a>
          </div>
          <hr class="dropdown-divider">
          <div class="dropdown-item">
            <a href="sql/login_system/logout.php">Logout</a>
          </div>

        </div>
      </div>
    </div>
  </header>

  <div id="ageByBioSex">
    <div class="stickyHeader">
      <h2>Age by Biological Sex</h2>
    </div>
    <div class="dataGrid">
      <?php require "sql/fetch_age_by_sex.php"; ?>
    </div>
  </div>

  <div id="map" class="iframeContainer">
    <iframe src="https://map.iddageofdeath.com/" allowfullscreen></iframe>
  </div>

  <div id="ageByRace">
    <div class="stickyHeader">
      <h2>Age by Race-Ethnicity</h2>
    </div>
    <div class="dataGrid">
      <?php require "sql/fetch_age_by_race.php"; ?>
    </div>
  </div>

  <div id="reference">
    <div>
      <h4>Contact:</h4>
      <a href="https://www.maxwell.syr.edu/soc/Landes,_Scott/" target="_blank">Scott Landes, PhD</a>
    </div>

    <div>
      <h4>Data Source:</h4>
      <a href="https://www.cdc.gov/nchs/nvss/index.htm" target="_blank">National Vital Statistics System</a>
    </div>

    <div>
      <h4>Terms of Use</h4>
      <p>&copy 2020 Syracuse University. All rights reserved. This website is based upon publicly available data from the National Vital
        Statistics System (NVSS) and is provided "as-is", without any representations or warranties of any kind, including without
        limitation with respect to accuracy and completeness, availability, suitability for a particular purpose and non-infringement. It
        is
        provided by Syracuse University for educational and research purposes only. We invite you to view and link to this website, but it
        may not be copied, reproduced, framed, downloaded, redistributed or displayed (in whole or in part) without the University's
        consent. Any use of the University's name, logo, seal or other trademarks also requires the University's consent.</p>
    </div>
  </div>

  <div id="chart">
  </div>

  <footer id="footer">
    <a href="https://www.maxwell.syr.edu/" target="_blank"><img src="assets/maxwell_primary_config_rgb-300x42.png"
           alt="Link to the website of Syracuse University Maxwell Schoool of Citizenship and Public Affairs."></a>
  </footer>
</div>
