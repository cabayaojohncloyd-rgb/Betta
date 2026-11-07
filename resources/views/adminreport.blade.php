  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
      @vite(['resources/css/sdg2.css', 'resources/js/app.js'])

      <title>BETTA | Admin Reports</title>
  </head>

  <body>


      <div class="admin-layout">

          <!-- Sidebar -->
          <aside class="sidebar">

              <div class="logo">
                  <h3>BETTA</h3>
                  <span>Admin Panel</span>
              </div>

              <nav class="side-nav">

                  <a href="{{ route('admin') }}"
                      class="nav-item {{ request()->routeIs('admin') ? 'active' : '' }}">
                      <span>⌂</span>
                      Dashboard
                  </a>

                  <a href="{{ route('admind') }}"
                      class="nav-item {{ request()->routeIs('admind') ? 'active' : '' }}">
                      <span>♡</span>
                      Donations
                  </a>

                  <a href="{{ route('admingoods') }}"
                      class="nav-item {{ request()->routeIs('admingoods') ? 'active' : '' }}">
                      <span>▤</span>
                      Donated Goods
                  </a>

                  <a href="{{ route('adminr') }}"
                      class="nav-item {{ request()->routeIs('adminr') ? 'active' : '' }}">
                      <span>▣</span>
                      Donation Requests
                  </a>

                  <a href="{{ route('adminc') }}"
                      class="nav-item {{ request()->routeIs('adminc') ? 'active' : '' }}">
                      <span>◆</span>
                      Causes / Projects
                  </a>

                  <!-- MONITORING -->
                  <a href="{{ route('adminmonitor') }}"
                      class="nav-item {{ request()->routeIs('adminmonitor') ? 'active' : '' }}">
                      <span><i class="bi bi-geo-alt"></i></span>
                      Monitoring
                  </a>

                  <a href="{{ route('adminu') }}"
                      class="nav-item {{ request()->routeIs('adminu') ? 'active' : '' }}">
                      <span>♙</span>
                      Users
                  </a>

                  <a href="{{ route('adminreport') }}"
                      class="nav-item {{ request()->routeIs('adminreport') ? 'active' : '' }}">
                      <span>▥</span>
                      Reports
                  </a>

              </nav>

              <div class="sidebar-bottom">

                  <a href="{{ route('adminset') }}" class="nav-item">
                      <span>⚙</span>
                      Settings
                  </a>

                  <a href="{{ route('home') }}" class="nav-item logout">
                      <span>↪</span>
                      Logout
                  </a>

              </div>

          </aside>


          <!-- Main Content -->
          <main class="dashboard" id="reportsMain">

              <!-- PAGE HEADER -->
              <div class="page-header">
                  <h1>Reports</h1>

                  <!-- NEW: ACTION BUTTONS (Export / Print / Reset) -->
                  <div class="report-actions d-flex flex-wrap gap-2">

                      <button type="button" class="btn btn-outline-primary" id="exportReportsBtn"
                          style="--bs-btn-color:#2b86c5; --bs-btn-border-color:#2b86c5; --bs-btn-hover-bg:#2b86c5; --bs-btn-hover-border-color:#2b86c5; --bs-btn-hover-color:#fff; --bs-btn-active-bg:#2b86c5; --bs-btn-active-border-color:#2b86c5; --bs-btn-active-color:#fff; --bs-btn-border-radius:10px; --bs-btn-padding-x:1.1rem; --bs-btn-padding-y:.6rem; background:#fff;">
                          <i class="bi bi-filetype-csv"></i> Export Data
                      </button>

                      <button type="button" class="btn btn-outline-danger" id="resetReportsBtn"
                          style="--bs-btn-border-radius:10px; --bs-btn-padding-x:1.1rem; --bs-btn-padding-y:.6rem;">
                          <i class="bi bi-arrow-counterclockwise"></i> Reset
                      </button>

                  </div>
              </div>


              <!-- REPORT SUMMARY -->
              <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-4" id="reportSummary">

                  <!-- TOTAL CAUSE DONATIONS -->
                  <div class="col">

                      <div class="report-card">

                          <div class="report-icon">
                              ₱
                          </div>

                          <p>Total Cause Donations</p>

                          <h2>₱0</h2>

                          <span>Total amount donated</span>

                      </div>

                  </div>


                  <!-- TOTAL PROJECT DONATIONS -->
                  <div class="col">

                      <div class="report-card">

                          <div class="report-icon">
                              ₱
                          </div>

                          <p>Total Project Donations</p>

                          <h2>₱0</h2>

                          <span>Total amount donated</span>

                      </div>

                  </div>


                  <!-- TOTAL GOODS -->
                  <div class="col">

                      <div class="report-card">

                          <div class="report-icon">
                              <i class="bi bi-basket"></i>
                          </div>

                          <p>Total Goods</p>

                          <h2>0</h2>

                          <span>Total goods donated</span>

                      </div>

                  </div>


                  <!-- TOTAL DONORS -->
                  <div class="col">

                      <div class="report-card">

                          <div class="report-icon">
                              ♡
                          </div>

                          <p>Total Donors</p>

                          <h2>0</h2>

                          <span>Registered donors</span>

                      </div>

                  </div>


                  <!-- PROJECTS SUPPORTED -->
                  <div class="col">

                      <div class="report-card">

                          <div class="report-icon">
                              ◆
                          </div>

                          <p>Projects Supported</p>

                          <h2>0</h2>

                          <span>Active and completed</span>

                      </div>

                  </div>


                  <!-- REQUESTS COMPLETED -->
                  <div class="col">

                      <div class="report-card">

                          <div class="report-icon">
                              ▣
                          </div>

                          <p>Requests Completed</p>

                          <h2>0</h2>

                          <span>Approved requests</span>

                      </div>

                  </div>

              </div>



              <!-- DONATION AND PROJECT REPORT -->
              <div class="row g-4 mb-4">


                  <!-- DONATION REPORT -->
                  <div class="col-lg-8">

                      <div class="report-container h-100">

                          <div class="report-header">

                              <div>

                                  <h3>Donation Overview</h3>

                                  <p>Donation activity for this year.</p>

                              </div>

                          </div>


                          <div class="donation-chart" id="donationChart">


                              <!-- MAY -->
                              <div class="chart-row">

                                  <span>May</span>

                                  <div class="chart-bar">

                                      <div class="chart-fill"
                                          style="width: 0%;">
                                      </div>

                                  </div>

                                  <strong>₱0</strong>

                              </div>


                              <!-- JUNE -->
                              <div class="chart-row">

                                  <span>June</span>

                                  <div class="chart-bar">

                                      <div class="chart-fill"
                                          style="width: 0%;">
                                      </div>

                                  </div>

                                  <strong>₱0</strong>

                              </div>


                              <!-- JULY -->
                              <div class="chart-row">

                                  <span>July</span>

                                  <div class="chart-bar">

                                      <div class="chart-fill"
                                          style="width: 0%;">
                                      </div>

                                  </div>

                                  <strong>₱0</strong>

                              </div>


                              <!-- AUGUST -->
                              <div class="chart-row">

                                  <span>August</span>

                                  <div class="chart-bar">

                                      <div class="chart-fill"
                                          style="width: 0%;">
                                      </div>

                                  </div>

                                  <strong>₱0</strong>

                              </div>


                              <!-- SEPTEMBER -->
                              <div class="chart-row">

                                  <span>September</span>

                                  <div class="chart-bar">

                                      <div class="chart-fill"
                                          style="width: 0%;">
                                      </div>

                                  </div>

                                  <strong>₱0</strong>

                              </div>


                              <!-- OCTOBER -->
                              <div class="chart-row">

                                  <span>October</span>

                                  <div class="chart-bar">

                                      <div class="chart-fill"
                                          style="width: 0%;">
                                      </div>

                                  </div>

                                  <strong>₱0</strong>

                              </div>


                          </div>

                      </div>

                  </div>



                  <!-- PROJECT REPORT -->
                  <div class="col-lg-4">

                      <div class="report-container h-100" id="causeSummary">

                          <div class="report-header">

                              <h3>Donation Cause Summary</h3>

                              <p>Current project status.</p>

                          </div>


                          <!-- ACTIVE PROJECTS -->
                          <div class="report-item">

                              <div>

                                  <strong>Active Causes</strong>

                                  <span>
                                      Currently accepting donations
                                  </span>

                              </div>

                              <b>0</b>

                          </div>


                          <!-- COMPLETED PROJECTS -->
                          <div class="report-item">

                              <div>

                                  <strong>Completed Causes</strong>

                                  <span>
                                      Successfully completed
                                  </span>

                              </div>

                              <b>0</b>

                          </div>


                          <!-- TOTAL PROJECTS -->
                          <div class="report-item">

                              <div>

                                  <strong>Total Causes</strong>

                                  <span>All Causes</span>

                              </div>

                              <b>0</b>

                          </div>


                      </div>

                  </div>

              </div>

              <!-- Projects -->

              <!-- PROJECT DONATION AND PROJECT SUMMARY -->
              <div class="row g-4 mb-4">

                  <!-- PROJECT DONATION REPORT -->
                  <div class="col-lg-8">

                      <div class="report-container h-100">

                          <div class="report-header">

                              <div>

                                  <h3>Project Donation Overview</h3>

                                  <p>Project donation activity for this year.</p>

                              </div>

                          </div>


                          <div class="donation-chart" id="projectChart">

                              <!-- MAY -->
                              <div class="chart-row">

                                  <span>May</span>

                                  <div class="chart-bar">

                                      <div class="chart-fill"
                                          style="width: 0%;">
                                      </div>

                                  </div>

                                  <strong>₱0</strong>

                              </div>


                              <!-- JUNE -->
                              <div class="chart-row">

                                  <span>June</span>

                                  <div class="chart-bar">

                                      <div class="chart-fill"
                                          style="width: 0%;">
                                      </div>

                                  </div>

                                  <strong>₱0</strong>

                              </div>


                              <!-- JULY -->
                              <div class="chart-row">

                                  <span>July</span>

                                  <div class="chart-bar">

                                      <div class="chart-fill"
                                          style="width: 0%;">
                                      </div>

                                  </div>

                                  <strong>₱0</strong>

                              </div>


                              <!-- AUGUST -->
                              <div class="chart-row">

                                  <span>August</span>

                                  <div class="chart-bar">

                                      <div class="chart-fill"
                                          style="width: 0%;">
                                      </div>

                                  </div>

                                  <strong>₱0</strong>

                              </div>


                              <!-- SEPTEMBER -->
                              <div class="chart-row">

                                  <span>September</span>

                                  <div class="chart-bar">

                                      <div class="chart-fill"
                                          style="width: 0%;">
                                      </div>

                                  </div>

                                  <strong>₱0</strong>

                              </div>


                              <!-- OCTOBER -->
                              <div class="chart-row">

                                  <span>October</span>

                                  <div class="chart-bar">

                                      <div class="chart-fill"
                                          style="width: 0%;">
                                      </div>

                                  </div>

                                  <strong>₱0</strong>

                              </div>

                          </div>

                      </div>

                  </div>



                  <!-- PROJECT SUMMARY -->
                  <div class="col-lg-4">

                      <div class="report-container h-100" id="projectSummary">

                          <div class="report-header">

                              <h3>Project Summary</h3>

                              <p>Current project status.</p>

                          </div>


                          <!-- ACTIVE PROJECTS -->
                          <div class="report-item">

                              <div>

                                  <strong>Active Projects</strong>

                                  <span>
                                      Currently accepting donations
                                  </span>

                              </div>

                              <b>0</b>

                          </div>


                          <!-- COMPLETED PROJECTS -->
                          <div class="report-item">

                              <div>

                                  <strong>Completed Projects</strong>

                                  <span>
                                      Successfully completed
                                  </span>

                              </div>

                              <b>0</b>

                          </div>


                          <!-- TOTAL PROJECTS -->
                          <div class="report-item">

                              <div>

                                  <strong>Total Projects</strong>

                                  <span>All projects</span>

                              </div>

                              <b>0</b>

                          </div>

                      </div>

                  </div>

              </div>



              <!-- DONATION REQUEST SUMMARY -->
              <div class="report-container" id="requestSummary">

                  <div class="report-header">

                      <div>

                          <h3>Donation Request Summary</h3>

                          <p>
                              Overview of submitted donation requests.
                          </p>

                      </div>

                  </div>


                  <div class="row g-4">


                      <!-- TOTAL REQUESTS -->
                      <div class="col-12 col-sm-6 col-lg-3">

                          <div class="request-report">

                              <span>Total Requests</span>

                              <strong>0</strong>

                          </div>

                      </div>


                      <!-- PENDING -->
                      <div class="col-12 col-sm-6 col-lg-3">

                          <div class="request-report pending-report">

                              <span>Pending</span>

                              <strong>0</strong>

                          </div>

                      </div>


                      <!-- APPROVED -->
                      <div class="col-12 col-sm-6 col-lg-3">

                          <div class="request-report approved-report">

                              <span>Approved</span>

                              <strong>0</strong>

                          </div>

                      </div>


                      <!-- DECLINED -->
                      <div class="col-12 col-sm-6 col-lg-3">

                          <div class="request-report declined-report">

                              <span>Declined</span>

                              <strong>0</strong>

                          </div>

                      </div>


                  </div>

              </div>


          </main>

      </div>


      <!-- ============================================================
           REPORTS PAGE JAVASCRIPT (Reset, Export CSV, Print)
           ============================================================ -->
      <script>
          (function() {
              'use strict';

              /* ---------- Helpers ---------- */

              // Converts "₱25,800" -> 25800
              function parseAmount(text) {
                  var cleaned = String(text).replace(/[^0-9.\-]/g, '');
                  var n = parseFloat(cleaned);
                  return isNaN(n) ? 0 : n;
              }

              // Escapes a value for CSV
              function csvCell(value) {
                  var s = String(value === null || value === undefined ? '' : value);
                  if (/[",\n\r]/.test(s)) {
                      s = '"' + s.replace(/"/g, '""') + '"';
                  }
                  return s;
              }

              function csvRow(cells) {
                  return cells.map(csvCell).join(',');
              }

              function clean(text) {
                  return String(text).replace(/\s+/g, ' ').trim();
              }

              /* ---------- Data readers (read the current values from the page) ---------- */

              function readSummaryCards() {
                  var rows = [];
                  document.querySelectorAll('#reportSummary .report-card').forEach(function(card) {
                      var label = card.querySelector('p');
                      var value = card.querySelector('h2');
                      if (label && value) {
                          rows.push([clean(label.textContent), parseAmount(value.textContent)]);
                      }
                  });
                  return rows;
              }

              function readChart(containerId) {
                  var rows = [];
                  document.querySelectorAll('#' + containerId + ' .chart-row').forEach(function(row) {
                      var month = row.querySelector('span');
                      var amount = row.querySelector('strong');
                      if (month && amount) {
                          rows.push([clean(month.textContent), parseAmount(amount.textContent)]);
                      }
                  });
                  return rows;
              }

              function readSummaryItems(containerId) {
                  var rows = [];
                  document.querySelectorAll('#' + containerId + ' .report-item').forEach(function(item) {
                      var label = item.querySelector('strong');
                      var value = item.querySelector('b');
                      if (label && value) {
                          rows.push([clean(label.textContent), parseAmount(value.textContent)]);
                      }
                  });
                  return rows;
              }

              function readRequestStats() {
                  var rows = [];
                  document.querySelectorAll('#requestSummary .request-report').forEach(function(box) {
                      var label = box.querySelector('span');
                      var value = box.querySelector('strong');
                      if (label && value) {
                          rows.push([clean(label.textContent), parseAmount(value.textContent)]);
                      }
                  });
                  return rows;
              }

              /* ---------- Success / info message ---------- */

              function showMessage(message, type) {
                  var main = document.getElementById('reportsMain');
                  var old = document.getElementById('reportAlert');
                  if (old) {
                      old.remove();
                  }

                  var alertBox = document.createElement('div');
                  alertBox.id = 'reportAlert';
                  alertBox.className = 'alert alert-' + (type || 'success') + ' alert-dismissible fade show';
                  alertBox.setAttribute('role', 'alert');
                  alertBox.innerHTML = message +
                      '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';

                  var header = main.querySelector('.page-header');
                  if (header && header.nextSibling) {
                      main.insertBefore(alertBox, header.nextSibling);
                  } else {
                      main.insertBefore(alertBox, main.firstChild);
                  }

                  setTimeout(function() {
                      if (alertBox.parentNode) {
                          alertBox.classList.remove('show');
                          setTimeout(function() {
                              alertBox.remove();
                          }, 200);
                      }
                  }, 5000);
              }

              /* ---------- 1 & 2. Reset with confirmation ---------- */

              function resetAllReportData() {
                  var confirmed = window.confirm(
                      'Are you sure you want to reset all report data? This action cannot be undone.'
                  );

                  if (!confirmed) {
                      return; // Admin cancelled: leave everything unchanged
                  }

                  // Summary cards: peso values -> ₱0, counts -> 0
                  document.querySelectorAll('#reportSummary .report-card h2').forEach(function(el) {
                      el.textContent = el.textContent.indexOf('₱') !== -1 ? '₱0' : '0';
                  });

                  // Monthly charts: amounts -> ₱0, bars -> 0%
                  ['donationChart', 'projectChart'].forEach(function(id) {
                      document.querySelectorAll('#' + id + ' .chart-row').forEach(function(row) {
                          var amount = row.querySelector('strong');
                          var fill = row.querySelector('.chart-fill');
                          if (amount) {
                              amount.textContent = '₱0';
                          }
                          if (fill) {
                              fill.style.width = '0%';
                          }
                      });
                  });

                  // Cause summary + Project summary counts
                  ['causeSummary', 'projectSummary'].forEach(function(id) {
                      document.querySelectorAll('#' + id + ' .report-item b').forEach(function(el) {
                          el.textContent = '0';
                      });
                  });

                  // Donation request summary counts
                  document.querySelectorAll('#requestSummary .request-report strong').forEach(function(el) {
                      el.textContent = '0';
                  });

                  showMessage('<strong>Success!</strong> All report data has been reset to zero.', 'success');
              }

              /* ---------- 3. Export to CSV ---------- */

              function exportReportsToCSV() {
                  var lines = [];
                  var now = new Date();

                  lines.push(csvRow(['BETTA Admin Reports']));
                  lines.push(csvRow(['Generated', now.toLocaleString()]));
                  lines.push('');

                  // Report summary (includes cause donation total, project donation total, goods, donors, etc.)
                  lines.push(csvRow(['REPORT SUMMARY']));
                  lines.push(csvRow(['Item', 'Value']));
                  readSummaryCards().forEach(function(r) {
                      lines.push(csvRow(r));
                  });
                  lines.push('');

                  // Donation overview (monthly)
                  lines.push(csvRow(['DONATION OVERVIEW (MONTHLY, PHP)']));
                  lines.push(csvRow(['Month', 'Amount (PHP)']));
                  var donationRows = readChart('donationChart');
                  var donationTotal = 0;
                  donationRows.forEach(function(r) {
                      donationTotal += r[1];
                      lines.push(csvRow(r));
                  });
                  lines.push(csvRow(['Total', donationTotal]));
                  lines.push('');

                  // Donation cause summary
                  lines.push(csvRow(['DONATION CAUSE SUMMARY']));
                  lines.push(csvRow(['Status', 'Count']));
                  readSummaryItems('causeSummary').forEach(function(r) {
                      lines.push(csvRow(r));
                  });
                  lines.push('');

                  // Project donation overview (monthly)
                  lines.push(csvRow(['PROJECT DONATION OVERVIEW (MONTHLY, PHP)']));
                  lines.push(csvRow(['Month', 'Amount (PHP)']));
                  var projectRows = readChart('projectChart');
                  var projectTotal = 0;
                  projectRows.forEach(function(r) {
                      projectTotal += r[1];
                      lines.push(csvRow(r));
                  });
                  lines.push(csvRow(['Total', projectTotal]));
                  lines.push('');

                  // Project summary
                  lines.push(csvRow(['PROJECT SUMMARY']));
                  lines.push(csvRow(['Status', 'Count']));
                  readSummaryItems('projectSummary').forEach(function(r) {
                      lines.push(csvRow(r));
                  });
                  lines.push('');

                  // Donation request statistics
                  lines.push(csvRow(['DONATION REQUEST SUMMARY']));
                  lines.push(csvRow(['Status', 'Count']));
                  readRequestStats().forEach(function(r) {
                      lines.push(csvRow(r));
                  });

                  // "\uFEFF" (BOM) makes Excel read the file as UTF-8
                  var csvContent = '\uFEFF' + lines.join('\r\n');
                  var blob = new Blob([csvContent], {
                      type: 'text/csv;charset=utf-8;'
                  });

                  var yyyy = now.getFullYear();
                  var mm = String(now.getMonth() + 1).padStart(2, '0');
                  var dd = String(now.getDate()).padStart(2, '0');
                  var fileName = 'betta-reports-' + yyyy + '-' + mm + '-' + dd + '.csv';

                  var url = URL.createObjectURL(blob);
                  var link = document.createElement('a');
                  link.href = url;
                  link.download = fileName;
                  document.body.appendChild(link);
                  link.click();
                  document.body.removeChild(link);
                  setTimeout(function() {
                      URL.revokeObjectURL(url);
                  }, 1000);

                  showMessage('<strong>Exported!</strong> ' + fileName + ' has been downloaded.', 'success');
              }

              /* ---------- Wire up buttons ---------- */

              document.addEventListener('DOMContentLoaded', function() {
                  var resetBtn = document.getElementById('resetReportsBtn');
                  var exportBtn = document.getElementById('exportReportsBtn');

                  if (resetBtn) {
                      resetBtn.addEventListener('click', resetAllReportData);
                  }
                  if (exportBtn) {
                      exportBtn.addEventListener('click', exportReportsToCSV);
                  }
              });
          })();
      </script>

  </body>

  </html>