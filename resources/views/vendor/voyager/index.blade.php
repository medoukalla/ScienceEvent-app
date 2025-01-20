@extends('voyager::master')

@section('content')

<div class="col-lg-12">
  <div class="card h-100" style="padding: 10px;">
    <form method="GET" class="d-flex gap-3 mb-3">
      <select name="formation_id" onchange="this.form.submit()" class="form-control">
        <option value="">Toutes les formations</option>
        @foreach($formations as $formation)
        <option value="{{ $formation->id }}" {{ request('formation_id') == $formation->id ? 'selected' : '' }}>
          {{ $formation->title }}
        </option>
        @endforeach
      </select>

      <input type="text" id="dateRangePicker" name="date_range" class="form-control"
        placeholder="Sélectionner une date" value="{{ request('date_range') }}" />

      <button type="submit" class="btn btn-primary">Appliquer</button>
    </form>
    <canvas id="ordersGraph"></canvas>
  </div>
</div>


<!-- Include required libraries -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>
<link href="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.css" rel="stylesheet" />

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Initialize Litepicker
    new Litepicker({
      element: document.getElementById('dateRangePicker'),
      format: 'YYYY-MM-DD',
      singleMode: false,
      dropdowns: {
        minYear: 2023,
        maxYear: 2030
      }
    });

     // Render the graph
    const data = {!! json_encode($data) !!};
    const maxOrders = {{ $maxOrders }};

    const ctx = document.getElementById('ordersGraph').getContext('2d');
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: data.map(item => item.name),
        datasets: [{
          data: data.map(item => item.order_count),
          backgroundColor: data.map(item => item.color),
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true,
            max: maxOrders,
            ticks: {
              stepSize: 1
            }
          }
        },
        plugins: { // Add this plugins option
          legend: {
            display: false // Hide the legend
          }
        }
      }
    });
  });
</script>


<!-- Sales ( confirmed vs rejected )  Overview -->
@php

$confirmedOrders = \App\Order::where('status', 3)->count();
$rejectedOrders = \App\Order::where('status', 4)->count();

$totalOrders = $confirmedOrders + $rejectedOrders;
$confirmedPercentage = $totalOrders > 0 ? round(($confirmedOrders / $totalOrders) * 100, 1) : 0;
$rejectedPercentage = $totalOrders > 0 ? round(($rejectedOrders / $totalOrders) * 100, 1) : 0;
@endphp
<div class="col-xl-3 col-sm-6">
  <div class="card h-100">
    <div class="card-header pb-0">
      <div class="d-flex justify-content-between">
        <p class="mb-0 text-body">Aperçu des commandes</p>
        <p class="card-text fw-medium text-success">+{{ $confirmedPercentage }}%</p>
      </div>
      <h4 class="card-title mb-1 px-0">{{ $totalOrders }} Commandes</h4>
    </div>
    <div class="card-body pt-0">
      <div class="row">
        <div class="col-4">
          <div class="d-flex gap-2 align-items-center mb-2">
            <span class="badge bg-label-success p-1 rounded"><i class="ti ti-check ti-sm"></i></span>
            <p class="mb-0">Confirmées</p>
          </div>
          <h5 class="mb-0 pt-1">{{ $confirmedPercentage }}%</h5>
          <small class="text-muted">{{ $confirmedOrders }}</small>
        </div>
        <div class="col-4">
          <div class="divider divider-vertical">
            <div class="divider-text">
              <span class="badge-divider-bg bg-label-secondary">VS</span>
            </div>
          </div>
        </div>
        <div class="col-4 text-end">
          <div class="d-flex gap-2 justify-content-end align-items-center mb-2">
            <p class="mb-0">Rejetées</p>
            <span class="badge bg-label-danger p-1 rounded"><i class="ti ti-x ti-sm"></i></span>
          </div>
          <h5 class="mb-0 pt-1">{{ $rejectedPercentage }}%</h5>
          <small class="text-muted">{{ $rejectedOrders }}</small>
        </div>
      </div>
      <div class="d-flex align-items-center mt-6">
        <div class="progress w-100" style="height: 10px;">
          <div class="progress-bar bg-success" style="width: {{ $confirmedPercentage }}%" role="progressbar" aria-valuenow="{{ $confirmedPercentage }}" aria-valuemin="0" aria-valuemax="100"></div>
          <div class="progress-bar bg-danger" role="progressbar" style="width: {{ $rejectedPercentage }}%" aria-valuenow="{{ $rejectedPercentage }}" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Sales ( confirmed vs rejected )  Overview -->

<!-- Website Analytics -->
<div class="col-lg-6">
  <div class="swiper-container swiper-container-horizontal swiper swiper-card-advance-bg" id="swiper-with-pagination-cards">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="row">
          <div class="col-12">
            <h5 class="text-white mb-0">Analyse du site Web</h5>
          </div>
          <div class="row">
            <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1 pt-md-9">
              <h6 class="text-white mt-0 mt-md-3 mb-4">Détails</h6>
              <div class="row">
                <div class="col-6">
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex mb-4 align-items-center">
                      <p class="mb-0 fw-medium me-2 website-analytics-text-bg">{{ \App\Category::count() }}</p>
                      <p class="mb-0">Les spécialités</p>
                    </li>
                    <li class="d-flex align-items-center">
                      <p class="mb-0 fw-medium me-2 website-analytics-text-bg">{{ \App\Formation::count() }}</p>
                      <p class="mb-0">Les formations</p>
                    </li>
                  </ul>
                </div>
                <div class="col-6">
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex mb-4 align-items-center">
                      <p class="mb-0 fw-medium me-2 website-analytics-text-bg">{{ \App\Doctor::count() }}</p>
                      <p class="mb-0">Médecins</p>
                    </li>
                    <li class="d-flex align-items-center">
                      <p class="mb-0 fw-medium me-2 website-analytics-text-bg">{{ \App\Order::where('status', 3)->count() }}</p>
                      <p class="mb-0">Ventes</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
              <img src="{{ asset('assets-dashboard/img/illustrations/card-website-analytics-1.png') }}" alt="Website Analytics" height="150" class="card-website-analytics-img">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Website Analytics -->


<!-- Earning Reports by payment method -->
@php
use App\Order;

// Fetch data for each payment method
$paymentMethods = [
    1 => "Virement / Versement",
    2 => "Chéque",
    3 => "Espèce",
    4 => "Prise en charge",
    5 => "Paiement en ligne"
];

$data = [];
$totalEarnings = 0;

foreach ($paymentMethods as $methodId => $methodName) {
    $earnings = Order::where('status', 3)
        ->where('method_payment', $methodId)
        ->sum('price');

    $totalEarnings += $earnings;

    $data[] = [
        'method' => $methodName,
        'earnings' => $earnings,
        'percentage' => $totalEarnings > 0 ? ($earnings / $totalEarnings) * 100 : 0
    ];
}
@endphp
<div class="col-lg-12">
    <div class="card h-100">
        <div class="card-header p-1 pb-0 d-flex justify-content-between">
            <div class="card-title mb-0">
                <h5 class="mb-1">Rapports de revenus</h5>
                <p class="card-subtitle">Aperçu hebdomadaire des revenus</p>
            </div>
        </div>
        <div class="card-body">
            <div class="row align-items-center g-md-8">
                <div class="col-12 col-md-5 d-flex flex-column">
                    <div class="d-flex gap-2 align-items-center mb-3 flex-wrap">
                        <h2 class="mb-0">{{ number_format($totalEarnings, 2) }} DH</h2>
                    </div>
                    <small class="text-body">Résumé des revenus confirmés</small>
                </div>
            </div>
            <div class="border rounded p-5 mt-5">
                <div class="row gap-4 gap-sm-0">
                  
                    @foreach($data as $entry)
                        <div class="col-12 col-sm-2">
                            <div class="d-flex gap-2 align-items-center">
                                <div class="badge rounded bg-label-primary p-1">
                                  @switch($entry['method'])
                                      @case('Virement / Versement')
                                          <i class="ti ti-arrows-transfer-up ti-sm"></i>
                                          @break
                                      @case('Chéque')
                                          <i class="ti ti-wallet ti-sm"></i>
                                          @break
                                      @case('Espèce')
                                          <i class="ti ti-cash ti-sm"></i>
                                          @break
                                      @case('Prise en charge')
                                          <i class="ti ti-building ti-sm"></i>
                                          @break
                                      @case('Paiement en ligne')
                                          <i class="ti ti-credit-card ti-sm"></i>
                                          @break
                                      @default
                                          <i class="ti ti-help ti-sm"></i>
                                  @endswitch


                                </div>
                                <h6 class="mb-0 fw-normal mt-0">{{ $entry['method'] }}</h6>
                            </div>
                            <h4 class="my-2">{{ number_format($entry['earnings'], 2) }} DH</h4>
                            <div class="progress w-75" style="height:4px">
                                <div class="progress-bar bg-primary" role="progressbar" 
                                     style="width: 100%" 
                                     aria-valuenow="100%" 
                                     aria-valuemin="0" 
                                     aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Earning Reports by payment method -->

@stop


<style>
  canvas#ordersGraph {
    max-height: 300px !important;
    min-height: 300px !important;
  }
</style>

@section('javascript')

@if(isset($google_analytics_client_id) && !empty($google_analytics_client_id))
<script>
  (function(w, d, s, g, js, fs) {
    g = w.gapi || (w.gapi = {});
    g.analytics = {
      q: [],
      ready: function(f) {
        this.q.push(f);
      }
    };
    js = d.createElement(s);
    fs = d.getElementsByTagName(s)[0];
    js.src = 'https://apis.google.com/js/platform.js';
    fs.parentNode.insertBefore(js, fs);
    js.onload = function() {
      g.load('analytics');
    };
  }(window, document, 'script'));
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.1.1/Chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script>
  // View Selector 2 JS
  ! function(e) {
    function t(r) {
      if (i[r]) return i[r].exports;
      var o = i[r] = {
        exports: {},
        id: r,
        loaded: !1
      };
      return e[r].call(o.exports, o, o.exports, t), o.loaded = !0, o.exports
    }
    var i = {};
    return t.m = e, t.c = i, t.p = "", t(0)
  }([function(e, t, i) {
    "use strict";

    function r(e) {
      return e && e.__esModule ? e : {
        "default": e
      }
    }
    var o = i(1),
      s = r(o);
    gapi.analytics.ready(function() {
      function e(e, t, i) {
        e.innerHTML = t.map(function(e) {
          var t = e.id == i ? "selected " : " ";
          return "<option " + t + 'value="' + e.id + '">' + e.name + "</option>"
        }).join("")
      }

      function t(e) {
        return e.ids || e.viewId ? {
          prop: "viewId",
          value: e.viewId || e.ids && e.ids.replace(/^ga:/, "")
        } : e.propertyId ? {
          prop: "propertyId",
          value: e.propertyId
        } : e.accountId ? {
          prop: "accountId",
          value: e.accountId
        } : void 0
      }
      gapi.analytics.createComponent("ViewSelector2", {
        execute: function() {
          return this.setup_(function() {
            this.updateAccounts_(), this.changed_ && (this.render_(), this.onChange_())
          }.bind(this)), this
        },
        set: function(e) {
          if (!!e.ids + !!e.viewId + !!e.propertyId + !!e.accountId > 1) throw new Error('You cannot specify more than one of the following options: "ids", "viewId", "accountId", "propertyId"');
          if (e.container && this.container) throw new Error("You cannot change containers once a view selector has been rendered on the page.");
          var t = this.get();
          return (t.ids != e.ids || t.viewId != e.viewId || t.propertyId != e.propertyId || t.accountId != e.accountId) && (t.ids = null, t.viewId = null, t.propertyId = null, t.accountId = null), gapi.analytics.Component.prototype.set.call(this, e)
        },
        setup_: function(e) {
          function t() {
            s["default"].get().then(function(t) {
              i.summaries = t, i.accounts = i.summaries.all(), e()
            }, function(e) {
              i.emit("error", e)
            })
          }
          var i = this;
          gapi.analytics.auth.isAuthorized() ? t() : gapi.analytics.auth.on("signIn", t)
        },
        updateAccounts_: function() {
          var e = this.get(),
            i = t(e),
            r = void 0,
            o = void 0,
            s = void 0;
          if (!this.summaries.all().length) return this.emit("error", new Error('This user does not have any Google Analytics accounts. You can sign up at "www.google.com/analytics".'));
          if (i) switch (i.prop) {
            case "viewId":
              r = this.summaries.getProfile(i.value), o = this.summaries.getAccountByProfileId(i.value), s = this.summaries.getWebPropertyByProfileId(i.value);
              break;
            case "propertyId":
              s = this.summaries.getWebProperty(i.value), o = this.summaries.getAccountByWebPropertyId(i.value), r = s && s.views && s.views[0];
              break;
            case "accountId":
              o = this.summaries.getAccount(i.value), s = o && o.properties && o.properties[0], r = s && s.views && s.views[0]
          } else o = this.accounts[0], s = o && o.properties && o.properties[0], r = s && s.views && s.views[0];
          o || s || r ? (o != this.account || s != this.property || r != this.view) && (this.changed_ = {
            account: o && o != this.account,
            property: s && s != this.property,
            view: r && r != this.view
          }, this.account = o, this.properties = o.properties, this.property = s, this.views = s && s.views, this.view = r, this.ids = r && "ga:" + r.id) : this.emit("error", new Error("This user does not have access to " + i.prop.slice(0, -2) + " : " + i.value))
        },
        render_: function() {
          var t = this.get();
          this.container = "string" == typeof t.container ? document.getElementById(t.container) : t.container, this.container.innerHTML = t.template || this.template;
          var i = this.container.querySelectorAll("select"),
            r = this.accounts,
            o = this.properties || [{
              name: "(Empty)",
              id: ""
            }],
            s = this.views || [{
              name: "(Empty)",
              id: ""
            }];
          e(i[0], r, this.account.id), e(i[1], o, this.property && this.property.id), e(i[2], s, this.view && this.view.id), i[0].onchange = this.onUserSelect_.bind(this, i[0], "accountId"), i[1].onchange = this.onUserSelect_.bind(this, i[1], "propertyId"), i[2].onchange = this.onUserSelect_.bind(this, i[2], "viewId")
        },
        onChange_: function() {
          var e = {
            account: this.account,
            property: this.property,
            view: this.view,
            ids: this.view && "ga:" + this.view.id
          };
          this.changed_ && (this.changed_.account && this.emit("accountChange", e), this.changed_.property && this.emit("propertyChange", e), this.changed_.view && (this.emit("viewChange", e), this.emit("idsChange", e), this.emit("change", e.ids))), this.changed_ = null
        },
        onUserSelect_: function(e, t) {
          var i = {};
          i[t] = e.value, this.set(i), this.execute()
        },
        template: '<div class="ViewSelector2">  <div class="ViewSelector2-item">    <label>Account</label>    <select class="FormField"></select>  </div>  <div class="ViewSelector2-item">    <label>Property</label>    <select class="FormField"></select>  </div>  <div class="ViewSelector2-item">    <label>View</label>    <select class="FormField"></select>  </div></div>'
      })
    })
  }, function(e, t, i) {
    function r() {
      var e = gapi.client.request({
        path: n
      }).then(function(e) {
        return e
      });
      return new e.constructor(function(t, i) {
        var r = [];
        e.then(function o(e) {
          var c = e.result;
          c.items ? r = r.concat(c.items) : i(new Error("You do not have any Google Analytics accounts. Go to http://google.com/analytics to sign up.")), c.startIndex + c.itemsPerPage <= c.totalResults ? gapi.client.request({
            path: n,
            params: {
              "start-index": c.startIndex + c.itemsPerPage
            }
          }).then(o) : t(new s(r))
        }).then(null, i)
      })
    }
    var o, s = i(2),
      n = "/analytics/v3/management/accountSummaries";
    e.exports = {
      get: function(e) {
        return e && (o = null), o || (o = r())
      }
    }
  }, function(e, t) {
    function i(e) {
      this.accounts_ = e, this.webProperties_ = [], this.profiles_ = [], this.accountsById_ = {}, this.webPropertiesById_ = this.propertiesById_ = {}, this.profilesById_ = this.viewsById_ = {};
      for (var t, i = 0; t = this.accounts_[i]; i++)
        if (this.accountsById_[t.id] = {
            self: t
          }, t.webProperties) {
          r(t, "webProperties", "properties");
          for (var o, s = 0; o = t.webProperties[s]; s++)
            if (this.webProperties_.push(o), this.webPropertiesById_[o.id] = {
                self: o,
                parent: t
              }, o.profiles) {
              r(o, "profiles", "views");
              for (var n, c = 0; n = o.profiles[c]; c++) this.profiles_.push(n), this.profilesById_[n.id] = {
                self: n,
                parent: o,
                grandParent: t
              }
            }
        }
    }

    function r(e, t, i) {
      Object.defineProperty ? Object.defineProperty(e, i, {
        get: function() {
          return e[t]
        }
      }) : e[i] = e[t]
    }
    i.prototype.all = function() {
      return this.accounts_
    }, r(i.prototype, "all", "allAccounts"), i.prototype.allWebProperties = function() {
      return this.webProperties_
    }, r(i.prototype, "allWebProperties", "allProperties"), i.prototype.allProfiles = function() {
      return this.profiles_
    }, r(i.prototype, "allProfiles", "allViews"), i.prototype.get = function(e) {
      if (!!e.accountId + !!e.webPropertyId + !!e.propertyId + !!e.profileId + !!e.viewId > 1) throw new Error('get() only accepts an object with a single property: either "accountId", "webPropertyId", "propertyId", "profileId" or "viewId"');
      return this.getProfile(e.profileId || e.viewId) || this.getWebProperty(e.webPropertyId || e.propertyId) || this.getAccount(e.accountId)
    }, i.prototype.getAccount = function(e) {
      return this.accountsById_[e] && this.accountsById_[e].self
    }, i.prototype.getWebProperty = function(e) {
      return this.webPropertiesById_[e] && this.webPropertiesById_[e].self
    }, r(i.prototype, "getWebProperty", "getProperty"), i.prototype.getProfile = function(e) {
      return this.profilesById_[e] && this.profilesById_[e].self
    }, r(i.prototype, "getProfile", "getView"), i.prototype.getAccountByProfileId = function(e) {
      return this.profilesById_[e] && this.profilesById_[e].grandParent
    }, r(i.prototype, "getAccountByProfileId", "getAccountByViewId"), i.prototype.getWebPropertyByProfileId = function(e) {
      return this.profilesById_[e] && this.profilesById_[e].parent
    }, r(i.prototype, "getWebPropertyByProfileId", "getPropertyByViewId"), i.prototype.getAccountByWebPropertyId = function(e) {
      return this.webPropertiesById_[e] && this.webPropertiesById_[e].parent
    }, r(i.prototype, "getAccountByWebPropertyId", "getAccountByPropertyId"), e.exports = i
  }]);
  // DateRange Selector JS
  ! function(t) {
    function e(n) {
      if (a[n]) return a[n].exports;
      var i = a[n] = {
        exports: {},
        id: n,
        loaded: !1
      };
      return t[n].call(i.exports, i, i.exports, e), i.loaded = !0, i.exports
    }
    var a = {};
    return e.m = t, e.c = a, e.p = "", e(0)
  }([function(t, e) {
    "use strict";
    gapi.analytics.ready(function() {
      function t(t) {
        if (n.test(t)) return t;
        var i = a.exec(t);
        if (i) return e(+i[1]);
        if ("today" == t) return e(0);
        if ("yesterday" == t) return e(1);
        throw new Error("Cannot convert date " + t)
      }

      function e(t) {
        var e = new Date;
        e.setDate(e.getDate() - t);
        var a = String(e.getMonth() + 1);
        a = 1 == a.length ? "0" + a : a;
        var n = String(e.getDate());
        return n = 1 == n.length ? "0" + n : n, e.getFullYear() + "-" + a + "-" + n
      }
      var a = /(\d+)daysAgo/,
        n = /\d{4}\-\d{2}\-\d{2}/;
      gapi.analytics.createComponent("DateRangeSelector", {
        execute: function() {
          var e = this.get();
          e["start-date"] = e["start-date"] || "7daysAgo", e["end-date"] = e["end-date"] || "yesterday", this.container = "string" == typeof e.container ? document.getElementById(e.container) : e.container, e.template && (this.template = e.template), this.container.innerHTML = this.template;
          var a = this.container.querySelectorAll("input");
          return this.startDateInput = a[0], this.startDateInput.value = t(e["start-date"]), this.endDateInput = a[1], this.endDateInput.value = t(e["end-date"]), this.setValues(), this.setMinMax(), this.container.onchange = this.onChange.bind(this), this
        },
        onChange: function() {
          this.setValues(), this.setMinMax(), this.emit("change", {
            "start-date": this["start-date"],
            "end-date": this["end-date"]
          })
        },
        setValues: function() {
          this["start-date"] = this.startDateInput.value, this["end-date"] = this.endDateInput.value
        },
        setMinMax: function() {
          this.startDateInput.max = this.endDateInput.value, this.endDateInput.min = this.startDateInput.value
        },
        template: '<div class="DateRangeSelector">  <div class="DateRangeSelector-item">    <label>Start Date</label>     <input type="date">  </div>  <div class="DateRangeSelector-item">    <label>End Date</label>     <input type="date">  </div></div>'
      })
    })
  }]);
  // Active Users JS
  ! function(t) {
    function i(s) {
      if (e[s]) return e[s].exports;
      var n = e[s] = {
        exports: {},
        id: s,
        loaded: !1
      };
      return t[s].call(n.exports, n, n.exports, i), n.loaded = !0, n.exports
    }
    var e = {};
    return i.m = t, i.c = e, i.p = "", i(0)
  }([function(t, i) {
    "use strict";
    gapi.analytics.ready(function() {
      gapi.analytics.createComponent("ActiveUsers", {
        initialize: function() {
          this.activeUsers = 0, gapi.analytics.auth.once("signOut", this.handleSignOut_.bind(this))
        },
        execute: function() {
          this.polling_ && this.stop(), this.render_(), gapi.analytics.auth.isAuthorized() ? this.pollActiveUsers_() : gapi.analytics.auth.once("signIn", this.pollActiveUsers_.bind(this))
        },
        stop: function() {
          clearTimeout(this.timeout_), this.polling_ = !1, this.emit("stop", {
            activeUsers: this.activeUsers
          })
        },
        render_: function() {
          var t = this.get();
          this.container = "string" == typeof t.container ? document.getElementById(t.container) : t.container, this.container.innerHTML = t.template || this.template, this.container.querySelector("b").innerHTML = this.activeUsers
        },
        pollActiveUsers_: function() {
          var t = this.get(),
            i = 1e3 * (t.pollingInterval || 5);
          if (isNaN(i) || 5e3 > i) throw new Error("Frequency must be 5 seconds or more.");
          this.polling_ = !0, gapi.client.analytics.data.realtime.get({
            ids: t.ids,
            metrics: "rt:activeUsers"
          }).then(function(t) {
            var e = t.result,
              s = e.totalResults ? +e.rows[0][0] : 0,
              n = this.activeUsers;
            this.emit("success", {
              activeUsers: this.activeUsers
            }), s != n && (this.activeUsers = s, this.onChange_(s - n)), 1 == this.polling_ && (this.timeout_ = setTimeout(this.pollActiveUsers_.bind(this), i))
          }.bind(this))
        },
        onChange_: function(t) {
          var i = this.container.querySelector("b");
          i && (i.innerHTML = this.activeUsers), this.emit("change", {
            activeUsers: this.activeUsers,
            delta: t
          }), t > 0 ? this.emit("increase", {
            activeUsers: this.activeUsers,
            delta: t
          }) : this.emit("decrease", {
            activeUsers: this.activeUsers,
            delta: t
          })
        },
        handleSignOut_: function() {
          this.stop(), gapi.analytics.auth.once("signIn", this.handleSignIn_.bind(this))
        },
        handleSignIn_: function() {
          this.pollActiveUsers_(), gapi.analytics.auth.once("signOut", this.handleSignOut_.bind(this))
        },
        template: '<div class="ActiveUsers">Active Users: <b class="ActiveUsers-value"></b></div>'
      })
    })
  }]);
</script>

<script>
  // == NOTE ==
  // This code uses ES6 promises. If you want to use this code in a browser
  // that doesn't supporting promises natively, you'll have to include a polyfill.

  gapi.analytics.ready(function() {

    /**
     * Authorize the user immediately if the user has already granted access.
     * If no access has been created, render an authorize button inside the
     * element with the ID "embed-api-auth-container".
     */
    gapi.analytics.auth.authorize({
      container: 'embed-api-auth-container',
      clientid: '{{ $google_analytics_client_id }}'
    });


    /**
     * Create a new ActiveUsers instance to be rendered inside of an
     * element with the id "active-users-container" and poll for changes every
     * five seconds.
     */
    var activeUsers = new gapi.analytics.ext.ActiveUsers({
      container: 'active-users-container',
      pollingInterval: 5
    });


    /**
     * Add CSS animation to visually show the when users come and go.
     */
    activeUsers.once('success', function() {
      var element = this.container.firstChild;
      var timeout;

      document.getElementById('embed-api-auth-container').style.display = 'none';
      document.getElementById('analytics-dashboard').style.display = 'block';

      this.on('change', function(data) {
        var element = this.container.firstChild;
        var animationClass = data.delta > 0 ? 'is-increasing' : 'is-decreasing';
        element.className += (' ' + animationClass);

        clearTimeout(timeout);
        timeout = setTimeout(function() {
          element.className =
            element.className.replace(/ is-(increasing|decreasing)/g, '');
        }, 3000);
      });
    });


    /**
     * Create a new ViewSelector2 instance to be rendered inside of an
     * element with the id "view-selector-container".
     */
    var viewSelector = new gapi.analytics.ext.ViewSelector2({
        container: 'view-selector-container',
        propertyId: '{{ Voyager::setting("site.google_analytics_tracking_id")  }}'
      })
      .execute();


    /**
     * Update the activeUsers component, the Chartjs charts, and the dashboard
     * title whenever the user changes the view.
     */
    viewSelector.on('viewChange', function(data) {
      var title = document.getElementById('view-name');
      if (title) {
        title.innerHTML = data.property.name + ' (' + data.view.name + ')';
      }

      // Start tracking active users for this view.
      activeUsers.set(data).execute();

      // Render all the of charts for this view.
      renderWeekOverWeekChart(data.ids);
      renderYearOverYearChart(data.ids);
      renderTopBrowsersChart(data.ids);
      renderTopCountriesChart(data.ids);
    });


    /**
     * Draw the a chart.js line chart with data from the specified view that
     * overlays session data for the current week over session data for the
     * previous week.
     */
    function renderWeekOverWeekChart(ids) {

      // Adjust `now` to experiment with different days, for testing only...
      var now = moment(); // .subtract(3, 'day');

      var thisWeek = query({
        'ids': ids,
        'dimensions': 'ga:date,ga:nthDay',
        'metrics': 'ga:users',
        'start-date': moment(now).subtract(1, 'day').day(0).format('YYYY-MM-DD'),
        'end-date': moment(now).format('YYYY-MM-DD')
      });

      var lastWeek = query({
        'ids': ids,
        'dimensions': 'ga:date,ga:nthDay',
        'metrics': 'ga:users',
        'start-date': moment(now).subtract(1, 'day').day(0).subtract(1, 'week')
          .format('YYYY-MM-DD'),
        'end-date': moment(now).subtract(1, 'day').day(6).subtract(1, 'week')
          .format('YYYY-MM-DD')
      });

      Promise.all([thisWeek, lastWeek]).then(function(results) {

        var data1 = results[0].rows.map(function(row) {
          return +row[2];
        });
        var data2 = results[1].rows.map(function(row) {
          return +row[2];
        });
        var labels = results[1].rows.map(function(row) {
          return +row[0];
        });

        labels = labels.map(function(label) {
          return moment(label, 'YYYYMMDD').format('ddd');
        });

        var data = {
          labels: labels,
          datasets: [{
              label: '{{ __('
              voyager::date.last_week ') }}',
              fillColor: 'rgba(220,220,220,0.5)',
              strokeColor: 'rgba(220,220,220,1)',
              pointColor: 'rgba(220,220,220,1)',
              pointStrokeColor: '#fff',
              data: data2
            },
            {
              label: '{{ __('
              voyager::date.this_week ') }}',
              fillColor: 'rgba(151,187,205,0.5)',
              strokeColor: 'rgba(151,187,205,1)',
              pointColor: 'rgba(151,187,205,1)',
              pointStrokeColor: '#fff',
              data: data1
            }
          ]
        };

        new Chart(makeCanvas('chart-1-container')).Line(data);
        generateLegend('legend-1-container', data.datasets);
      });
    }


    /**
     * Draw the a chart.js bar chart with data from the specified view that
     * overlays session data for the current year over session data for the
     * previous year, grouped by month.
     */
    function renderYearOverYearChart(ids) {

      // Adjust `now` to experiment with different days, for testing only...
      var now = moment(); // .subtract(3, 'day');

      var thisYear = query({
        'ids': ids,
        'dimensions': 'ga:month,ga:nthMonth',
        'metrics': 'ga:users',
        'start-date': moment(now).date(1).month(0).format('YYYY-MM-DD'),
        'end-date': moment(now).format('YYYY-MM-DD')
      });

      var lastYear = query({
        'ids': ids,
        'dimensions': 'ga:month,ga:nthMonth',
        'metrics': 'ga:users',
        'start-date': moment(now).subtract(1, 'year').date(1).month(0)
          .format('YYYY-MM-DD'),
        'end-date': moment(now).date(1).month(0).subtract(1, 'day')
          .format('YYYY-MM-DD')
      });

      Promise.all([thisYear, lastYear]).then(function(results) {
          var data1 = results[0].rows.map(function(row) {
            return +row[2];
          });
          var data2 = results[1].rows.map(function(row) {
            return +row[2];
          });
          var labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
            'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
          ];

          // Ensure the data arrays are at least as long as the labels array.
          // Chart.js bar charts don't (yet) accept sparse datasets.
          for (var i = 0, len = labels.length; i < len; i++) {
            if (data1[i] === undefined) data1[i] = null;
            if (data2[i] === undefined) data2[i] = null;
          }

          var data = {
            labels: labels,
            datasets: [{
                label: '{{ __('
                voyager::date.last_year ') }}',
                fillColor: 'rgba(220,220,220,0.5)',
                strokeColor: 'rgba(220,220,220,1)',
                data: data2
              },
              {
                label: '{{ __('
                voyager::date.this_year ') }}',
                fillColor: 'rgba(151,187,205,0.5)',
                strokeColor: 'rgba(151,187,205,1)',
                data: data1
              }
            ]
          };

          new Chart(makeCanvas('chart-2-container')).Bar(data);
          generateLegend('legend-2-container', data.datasets);
        })
        .catch(function(err) {
          console.error(err.stack);
        });
    }


    /**
     * Draw the a chart.js doughnut chart with data from the specified view that
     * show the top 5 browsers over the past seven days.
     */
    function renderTopBrowsersChart(ids) {

      query({
          'ids': ids,
          'dimensions': 'ga:browser',
          'metrics': 'ga:pageviews',
          'sort': '-ga:pageviews',
          'max-results': 5
        })
        .then(function(response) {

          var data = [];
          var colors = ['#4D5360', '#949FB1', '#D4CCC5', '#E2EAE9', '#F7464A'];

          response.rows.forEach(function(row, i) {
            data.push({
              value: +row[1],
              color: colors[i],
              label: row[0]
            });
          });

          new Chart(makeCanvas('chart-3-container')).Doughnut(data);
          generateLegend('legend-3-container', data);
        });
    }


    /**
     * Draw the a chart.js doughnut chart with data from the specified view that
     * compares sessions from mobile, desktop, and tablet over the past seven
     * days.
     */
    function renderTopCountriesChart(ids) {
      query({
          'ids': ids,
          'dimensions': 'ga:country',
          'metrics': 'ga:sessions',
          'sort': '-ga:sessions',
          'max-results': 5
        })
        .then(function(response) {

          var data = [];
          var colors = ['#4D5360', '#949FB1', '#D4CCC5', '#E2EAE9', '#F7464A'];

          response.rows.forEach(function(row, i) {
            data.push({
              label: row[0],
              value: +row[1],
              color: colors[i]
            });
          });

          new Chart(makeCanvas('chart-4-container')).Doughnut(data);
          generateLegend('legend-4-container', data);
        });
    }


    /**
     * Extend the Embed APIs `gapi.analytics.report.Data` component to
     * return a promise the is fulfilled with the value returned by the API.
     * @param {Object} params The request parameters.
     * @return {Promise} A promise.
     */
    function query(params) {
      return new Promise(function(resolve, reject) {
        var data = new gapi.analytics.report.Data({
          query: params
        });
        data.once('success', function(response) {
            resolve(response);
          })
          .once('error', function(response) {
            reject(response);
          })
          .execute();
      });
    }


    /**
     * Create a new canvas inside the specified element. Set it to be the width
     * and height of its container.
     * @param {string} id The id attribute of the element to host the canvas.
     * @return {RenderingContext} The 2D canvas context.
     */
    function makeCanvas(id) {
      var container = document.getElementById(id);
      var canvas = document.createElement('canvas');
      var ctx = canvas.getContext('2d');

      container.innerHTML = '';
      canvas.width = container.offsetWidth;
      canvas.height = container.offsetHeight;
      container.appendChild(canvas);

      return ctx;
    }


    /**
     * Create a visual legend inside the specified element based off of a
     * Chart.js dataset.
     * @param {string} id The id attribute of the element to host the legend.
     * @param {Array.<Object>} items A list of labels and colors for the legend.
     */
    function generateLegend(id, items) {
      var legend = document.getElementById(id);
      legend.innerHTML = items.map(function(item) {
        var color = item.color || item.fillColor;
        var label = item.label;
        return '<li><i style="background:' + color + '"></i>' + label + '</li>';
      }).join('');
    }


    // Set some global Chart.js defaults.
    Chart.defaults.global.animationSteps = 60;
    Chart.defaults.global.animationEasing = 'easeInOutQuart';
    Chart.defaults.global.responsive = true;
    Chart.defaults.global.maintainAspectRatio = false;

    // resize to redraw charts
    window.dispatchEvent(new Event('resize'));

  });
</script>

@endif

@stop