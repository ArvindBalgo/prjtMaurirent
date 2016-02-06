<h2>Filter</h2>

<div><span class="badge">Check-in </span><md-datepicker ng-model="myDate" md-placeholder="Enter Date"></md-datepicker></div>
<div><span class="badge">Check-out</span><md-datepicker ng-model="myDate1" md-placeholder="Enter Date"></md-datepicker></div>

<div>
    <md-input-container>
        <label>Region</label>
        <md-select ng-model="selected">
            <md-option ng-repeat="data in arrRegions" value="<%data.display%>">
                <%data.display%>
            </md-option>
        </md-select>
    </md-input-container>
</div>

<div>
    <md-input-container>
        <label>Type</label>
        <md-select ng-model="selectedType">
            <md-option ng-repeat="data in arrTypes" value="<%data%>">
                <%data%>
            </md-option>
        </md-select>
    </md-input-container>
    <md-input-container class="md-block">
        <label>Occupancy</label>
        <input required type="number" step="any" name="persons" ng-model="person" min="0"
               max="4999" />
    </md-input-container>
</div>
<button type="button" class="btn btn-info pull-right md-raised">Search</button>
