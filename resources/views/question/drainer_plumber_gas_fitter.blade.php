 <!-- drainer-plumber-gasfitter.blade.php -->



 <!-- Section 3.1 -->
 <div class="card p-4 my-3">
     <h4>3) DRAINER – PLUMBER – GAS FITTER</h4>
     <h5>3.1 Drainage to Concrete Slab Floors</h5>

     <!-- Par Plans & Specifications / N/A -->
     <div class="d-flex align-items-center mb-2">
         <span>Par Plans & Specifications</span>
         <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][drainage_option]" value="plans" checked>
         <span>N/A</span>
         <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][drainage_option]" value="na">
     </div>

     <div>
         <p><strong>Note:</strong> To correctly determine the position of drainage pipes prior to concrete being poured, the following information is to be provided:</p>
         <ul>
             <li>Bathrooms: Toilet suites, bath type/s, & Vanity type/s – see “PC selections” section.</li>

             <!-- Kitchen Layout -->
             <li>Kitchen:
                 <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][kitchen_plan]" value="floor_plan" checked> As per floor plan
                 <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][kitchen_plan]" value="manufacturer_plan"> Or As per manufacturer layout plan
             </li>

             <!-- Floor Wastes -->
             <li>Floor wastes:
                 <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][floor_wastes]" value="standard"> Standard Bathroom & Ensuite floor wastes shown on plan
                 <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][floor_wastes]" value="na"> or N/A
             </li>
         </ul>

         <div class="mt-1">Additional floor wastes (e.g., Laundry floor where grading to outside is not possible may require dry waste) shown on plan.</div>

         <!-- Notes Textarea -->
         <div class="mt-2">Notes to above:
             <textarea class="form-control mt-1" rows="2" name="sow[drainage_to_concrete_slab_floors][drainage_notes]" placeholder=".............................................................................."></textarea>
         </div>

         <p class="mt-2"><strong>Note:</strong> Special requirements for drainage pipes must be noted clearly e.g., in-wall rear entry to vanity.</p>
     </div>
 </div>



 <!-- Section 3.2 Card -->
 <div class="card p-4 my-3">
     <div class="card p-4">
         <h5>3.2 Sewerage System</h5>

         <!-- Options Row -->
         <div class="d-flex flex-wrap align-items-center mb-3">
             <div class="me-3 mb-2">
                 <span>Town Sewer</span>
                 <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][sewerage_system]" value="town_sewer" checked>
             </div>
             <div class="me-3 mb-2">
                 <span>Aerated/Septic</span>
                 <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][sewerage_system]" value="aerated_septic">
             </div>
             <div class="me-3 mb-2">
                 <span>Pump Out</span>
                 <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][sewerage_system]" value="pump_out">
             </div>
             <div class="me-3 mb-2">
                 <span>Existing</span>
                 <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][sewerage_system]" value="existing">
             </div>

         </div>

         <!-- Notes & Details -->
         <div>
             <p>- Approved System:
                 <span class="ms-2">BY BUILDER</span>
                 <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][approved_system]" value="by_builder" checked>
                 <span class="ms-3">BY OWNER</span>
                 <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][approved_system]" value="by_owner">
                 <span class="ms-3">or N.A. TOWN SEWER</span>
                 <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][approved_system]" value="na_town_sewer">
             </p>

             <p>- If by builder:
                 <span class="ms-2">1) Fixed price included in quote</span>
                 <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][builder_price]" value="fixed_price" checked>
                 <span class="ms-3">2) Provisional Sum</span>
                 <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][builder_price]" value="provisional_sum">
             </p>

             <p>- Aerated/septic system show location of tank on plan
                 <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][septic_location]" value="yes">
             </p>

             <p>- Aerated/septic system connection show approved sprinkler system location on plan
                 <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][sprinkler_location]" value="yes">
             </p>

             <p>- Existing septic or "system by owner" show location of system and sprinkler area on plan
                 <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][existing_system_location]" value="yes">
             </p>

             <!-- Notes Textarea -->

             <p class="mt-3"><strong>Note:</strong> Allowance for sewer pipe connection to sewer main or tank is 10m from the last pickup point at house. Extra over 10m will be charged at $55.00 per meter including builder's margin and GST. Allowance is made for standard authority connection fee to sewer only (if applicable), extra contributions, levies, or access fees are payable by owners.</p>
             <div class="mt-3">
                 Notes to above:
                 <textarea class="form-control mt-2" rows="3" name="sow[drainage_to_concrete_slab_floors][sewerage_notes]" placeholder=".............................................................................."></textarea>
             </div>

         </div>
     </div>
 </div>

 <!-- Container for Section 3 -->
 <!-- Container for Section 3 -->
 <div class="card p-4 my-3">
     <div class="card p-4">

         <!-- Section 3.3 -->
         <div class="mb-4 rounded p-3">
             <h5 class="mb-2">3.3 Stormwater</h5>
             <div class="d-flex align-items-center flex-wrap mb-3">
                 <div class="me-3 mb-2">
                     <span>Town Stormwater</span>
                     <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][stormwater_option]" value="town_stormwater" class="ms-1" checked>
                 </div>
                 <div class="me-3 mb-2">
                     <span>To Tank/s</span>
                     <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][stormwater_option]" value="tank" class="ms-1">
                 </div>
                 <div class="me-3 mb-2">
                     <span>Rubble Pitts</span>
                     <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][stormwater_option]" value="rubble_pits" class="ms-1">
                 </div>
                 <div class="me-3 mb-2">
                     <span>Existing</span>
                     <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][stormwater_option]" value="existing" class="ms-1">
                 </div>
             </div>

             <ul class="mb-2 ps-3">
                 <li>To tank/s then (A) show location of tank on plan</li>
                 <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][tank_on_plan]" value="tank_on_plan" class="ms-1" checked>

                 <li>(B) Are pressurised PVC down pipes required?
                     <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][pvc_required]" value="yes" class="ms-1" checked> Yes
                     <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][pvc_required]" value="no" class="ms-2"> No
                 </li>
                 <li>Rubble pit then show location and design on plan</li>
                 <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][design_on_plan]" value="design_on_plan" class="ms-1">

                 <li>Existing or "by owner" then show location on plan</li>
                 <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][location_on_plan]" value="location_on_plan" class="ms-1">

             </ul>

             <p class="small">
                 <strong>Note:</strong> Allowance for stormwater pipe connection to stormwater main, tank, or rubble pit is 10 (ten) meters from the last pick-up point at the house. Extra over 10 meters will be charged at a rate of $36.00 per meter, including builder's margin and GST.
             </p>

             <p>Notes to above:</p>
             <textarea name="sow[drainage_to_concrete_slab_floors][stormwater_notes]" rows="2" class="form-control" placeholder="................................................................................"></textarea>
         </div>
     </div>


     <!-- Section 3.4 -->
     <div class="card p-4">

         <div class="mb-4 rounded p-3">
             <h6 class="mb-2">3.4 Plumbing Layout Plan</h6>
             <div class="d-flex align-items-center flex-wrap mb-2">
                 <span>As per plans provided, completed, and signed by owners</span>
                 <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][plumbing_plan_provided]" class="ms-1 me-3" checked>
             </div>
             <p class="small"><strong>Note:</strong> This plan is to include the preferred position of: Rainwater tank/s (if applicable) including position of designated fire tank (if applicable), Water pump (if applicable), BASIX rainwater storage tank, Hot water tank and or solar panels, shower rose's and tap handles, bath spouts and tap handles, washing machine cocks (under tub or cupboard or over machine), Dishwasher cock, Spa Bath pump (if applicable), outside taps, and Gas points & Bottles (if applicable). Locations may be subject to change by plumber if required; however the owner will be notified if changes are required.</p>
             <p>Final kitchen layout plan provided (To show gas/dishwasher/sink etc.):
                 <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][kitchen_layout]" value="yes" class="ms-1"> Yes
                 <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][kitchen_layout]" value="no" class="ms-2"> No
             </p>
             <div class="d-flex align-items-center">

                 <!-- Label and Input -->

                 <label for="plumbing_layout_plan" class="me-2 mb-0">Notes to above:</label>
                 <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                     name="sow[site_work][plumbing_layout_plan]" id="plumbing_layout_plan" placeholder="Enter Plumbing Layout Plan notes">
             </div>
         </div>
     </div>


     <!-- Section 3.5 -->
     <div class="card p-4 my-3">

         <div class="rounded p-3">
             <h5 class="mb-2">3.5 Water Services</h5>
             <div class="d-flex align-items-center flex-wrap mb-2">
                 <span>Town Supply & BASIX Rainwater System</span>
                 <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][water_service]" value="town_basix" class="ms-1 me-3" checked>
                 <span>Tank Supply</span>
                 <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][water_service]" value="tank" class="ms-1 me-3">
                 <span>Town & Tank</span>
                 <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][water_service]" value="town_tank" class="ms-1 me-3">
                 <span>Existing</span>
                 <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][water_service]" value="existing" class="ms-1">
             </div>
             <p>- Water service type:</p>
             <div class="d-flex align-items-center mb-2">
                 <span>Standard hot & cold water</span>
                 <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][water_type]" value="standard" class="ms-1 me-3" checked>
                 <span>ALL copper hot & cold (additional cost)</span>
                 <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][water_type]" value="copper" class="ms-1">
             </div>
             <p>- Water tank supply:</p>
             <div class="d-flex align-items-center mb-2">
                 <span>By owner</span>
                 <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][tank_supply]" value="owner" class="ms-1 me-3">
                 <span>By builder</span>
                 <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][tank_supply]" value="builder" class="ms-1 me-3" checked>
             </div>
             <div class="mb-2">
                 <span>Type:</span>
                 <input type="text" name="sow[drainage_to_concrete_slab_floors][tank_type]" class="form-control d-inline-block ms-1" style="width:150px;" value="POLY">
                 <span class="ms-3">Size:</span>
                 <input type="text" name="sow[drainage_to_concrete_slab_floors][tank_size]" class="form-control d-inline-block ms-1" style="width:100px;" value="1500 x 2">
             </div>
         </div>


         <!-- Water Pump -->
         <div class="mb-3">
             <p>- Water pump:</p>
             <div class="ms-4">
                 <label>
                     <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][water_pump]" value="owner" checked> By owner
                 </label>
                 <label class="ms-3">
                     <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][water_pump]" value="builder" checked> By builder
                 </label>
             </div>
         </div>

         <!-- BASIX Tank -->
         <div class="mb-3">
             <p>- BASIX tank supply:</p>
             <div class="ms-4">
                 <label>
                     <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][basix_tank]" value="owner"> By owner
                 </label>
                 <label class="ms-3">
                     <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][basix_tank]" value="builder"> By builder
                 </label>
             </div>
         </div>


         <small><strong>Note 1:</strong> Allowance is made for connection to water service main (main near side of house) to meter max. 6m and from meter to house max. 6m. If connecting to water tank a 12m total max. run is allowed.</small>

         <small><strong>Note 2:</strong> Extra over 6 metre's from town water or 12 metre's from water tank will be charged at $25 per metre including builder's margin and GST.</small>

         <small><strong>Note 3:</strong> If water main is across road cost to bore under road is an extra cost as invoiced by plumber plus builder's margin plus GST.</small>

         <!-- Hot Water Service Supply -->
         <div class="mb-3">
             <p>- Hot Water Service Supply:</p>
             <div class="ms-4">
                 <label>
                     <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][hot_water_service]" value="fixed_price" checked> Fixed price included in quote
                 </label>
                 <label class="ms-3">
                     <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][hot_water_service]" value="provisional_sum"> Provisional Sum
                 </label>
             </div>
         </div>

         <!-- Hot Water Service Type -->
         <div class="mb-3">
             <p>- Hot water service type:</p>
             <div class="ms-4">
                 <label><input type="radio" class="form-check-input" name="hot_water_type[]" value="solar"> Solar</label>
                 <label class="ms-3"><input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][hot_water_type]" value="electric"> Electric</label>
                 <label class="ms-3"><input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][hot_water_type]" value="combination"> Combination</label>
                 <label class="ms-3"><input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][hot_water_type]" value="heat_pump" checked> Heat pump</label>
                 <label class="ms-3"><input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][hot_water_type]" value="gas"> Gas</label>
                 <label class="ms-3"><input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][hot_water_type]" value="other"> Other</label>
             </div>
         </div>

         <!-- Solar Hot Water Booster -->
         <div class="mb-3">
             <p>- Solar hot water booster:</p>
             <div class="ms-4">
                 <label><input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][solar_booster]" value="electric" checked> Electric</label>
                 <label class="ms-3"><input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][solar_booster]" value="gas"> Gas</label>
             </div>
         </div>

         <!-- Solar Hot Water Tank -->
         <div class="mb-3">
             <p>- Solar hot water tank:</p>
             <div class="ms-4">
                 <label><input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][solar_tank]" value="roof"> On Roof</label>
                 <label class="ms-3"><input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][solar_tank]" value="ground"> On Ground</label>
             </div>
         </div>

         <!-- Special Installations -->
         <div class="mb-3">
             <p>- Special installations:</p>
             <div class="ms-4">
                 <label><input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][special_installations]" value="water_to_fridge" checked> Water to fridge<label>
                         <label class="ms-3"><input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][special_installations]" value="hot_water_to_dishwasher"> Hot water to dishwasher</label>
                         <label class="ms-3"><input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][special_installations]" value="other"> Other</label>
             </div>
         </div>

         <!-- Notes Box -->
         <div class="mb-3">
             <p>Notes to above:</p>
             <textarea class="form-control" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][notes]" rows="3"></textarea>
         </div>
         <!-- Q1: Warning Section -->
         <div class="p-3 mb-3 bg-warning-subtle">
             <p><strong>IMPORTANT</strong></p>
             <p>Water supply and services in fire risk areas may have specific requirements to meet council consent. Conditions of development application <strong>MUST</strong> be checked prior to finalisation of selections.</p>
             <p>Checked: <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][fire_risk_checked]" value="checked" class="ms-2 me-2"> Bushfire Attack Level</p>
             <p>(N/A, 12.5, 19, 29, 40, FZ as per AS3959-2009)</p>
             <p>Checked By: <input type="text" name="sow[drainage_to_concrete_slab_floors][checked_by]" value="Inspector Name" class="form-control d-inline-block" style="width: 200px;"></p>
         </div>
     </div>

     <!-- Main section -->
     <div class="p-4 my-3">

         <!-- Q2: Tapware -->
         <div class="card p-4 my-3">
             <h5>3.6 Tapware & PC Items </h5>
             <div class="d-flex align-items-center mb-2">
                 <span>Per PC Selection Section</span>
                 <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][pc_selection]" value="yes" class="ms-1 me-3" checked>
             </div>
             <p>🛈 <strong>Note:</strong> PC items with special requirements should have installation instructions from the manufacturer also attached.
                 <input type="radio" class="form-check-input" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][pc_checked]" value="checked" class="ms-2" checked> (Checked)
             </p>
             <div class="d-flex align-items-center">

                 <!-- Label and Input -->

                 <label for="tapware_pc_items" class="me-2 mb-0">Notes to above:</label>
                 <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                     name="sow[site_work][tapware_pc_items]" id="tapware_pc_items" placeholder="Enter Tapware & PC Items notes">
             </div>
         </div>

         <!-- Q3: Gasfitter -->
         <div class="card p-4 my-3">
             <h5>3.7 Gasfitter</h5>

             <!-- Gas Type Selection -->
             <p>
                 <span>Natural Gas
                     <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][gas_type]" value="natural_gas" class="ms-1 me-3">
                 </span>
                 <span>LPG Gas
                     <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][gas_type]" value="lpg_gas" class="ms-1 me-3">
                 </span>
                 <span>N/A
                     <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][gas_type]" value="na" class="ms-1" checked>
                 </span>
             </p>

             <!-- Gas Service To -->
             <p>- Gas service to:
                 <span class="ms-3">Hot water
                     <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][gas_service_to]" value="hot water" class="ms-1 me-3" checked>
                 </span>
                 <span>Oven
                     <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][gas_service_to]" value="oven" class="ms-1 me-3">
                 </span>
                 <span>Cook top
                     <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][gas_service_to]" value="cook top" class="ms-1 me-3">
                 </span>
                 <span>Bayonet’s No:
                     <input type="number" name="sow[drainage_to_concrete_slab_floors][bayonet_no]" value="0" class="ms-1" style="width: 60px;">
                 </span>
             </p>

             <!-- Plumbing Layout Plan -->
             <p>- Gas points and appliances etc. shown on plumbing layout plan
                 <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][gas_layout_plan]" value="yes" class="ms-1 me-3">
             </p>

             <!-- Notes Section -->
             <div class="p-3 mb-3 bg-light">
                 <p>📝 Notes to above:</p>
                 <textarea class="form-control" name="sow[drainage_to_concrete_slab_floors][notes]" rows="2" placeholder="Enter notes here..."></textarea>
             </div>
         </div>

         <!-- Section Note -->
         <div class="p-3 bg-warning-subtle">
             <p class="mb-0">
                 <strong>Drainer-Plumber-Gas Fitter Section Note:</strong><br>
                 No allowance has been made in the event of rock excavation and the resultant extra construction time. Any rock excavation and extra construction time required will be charged at an hourly rate of builder's cost plus builder’s margin and GST. This rate will be inclusive of both labour and equipment hire.
             </p>
         </div>

     </div>