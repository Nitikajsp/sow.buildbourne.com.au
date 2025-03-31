 <!-- drainer-plumber-gasfitter.blade.php -->



 <!-- Section 3.1 -->
 <div class="card p-4 my-3">
     <h4>3) DRAINER – PLUMBER – GAS FITTER</h4>
     <h5>3.1 Drainage to Concrete Slab Floors</h5>
     <div class="d-flex align-items-center mb-2">
         <span>Par Plans & Specifications</span>
         <input type="checkbox" class="ms-1 me-3" name="drainage_par_plans" value="yes">
         <span>N/A</span>
         <input type="checkbox" class="ms-1" name="drainage_na" value="yes">
     </div>
     <div>
         <p><strong>Note:</strong> To correctly determine the position of drainage pipes prior to concrete being poured, the following information is to be provided:</p>
         <ul>
             <li>Bathrooms: Toilet suites, bath type/s, & Vanity type/s – see “PC selections” section.</li>
             <li>Kitchen:
                 <input type="checkbox" name="kitchen_plan" value="floor_plan"> As per floor plan
                 <input type="checkbox" name="kitchen_layout" value="manufacturer_plan"> Or As per manufacturer layout plan
             </li>
             <li>Floor wastes:
                 <input type="checkbox" name="floor_wastes_standard" value="yes"> Standard Bathroom & Ensuite floor wastes shown on plan
                 <input type="checkbox" name="floor_wastes_na" value="yes"> or N/A
             </li>
         </ul>
         <div class="mt-1">Additional floor wastes (e.g., Laundry floor where grading to outside is not possible may require dry waste) shown on plan.</div>
         <div class="mt-2">Notes to above:
             <textarea class="form-control mt-1" rows="2" name="drainage_notes" placeholder=".............................................................................."></textarea>
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
                 <input type="checkbox" class="ms-1" name="sewerage_system[]" value="town_sewer">
             </div>
             <div class="me-3 mb-2">
                 <span>Aerated/Septic</span>
                 <input type="checkbox" class="ms-1" name="sewerage_system[]" value="aerated_septic">
             </div>
             <div class="me-3 mb-2">
                 <span>Pump Out</span>
                 <input type="checkbox" class="ms-1" name="sewerage_system[]" value="pump_out">
             </div>
             <div class="me-3 mb-2">
                 <span>Existing</span>
                 <input type="checkbox" class="ms-1" name="sewerage_system[]" value="existing">
             </div>
             <div class="me-3 mb-2">
                 <span>N/A</span>
                 <input type="checkbox" class="ms-1" name="sewerage_system[]" value="na">
             </div>
         </div>

         <!-- Notes & Details -->
         <div>
             <p>- Approved System:
                 BY BUILDER <input type="checkbox" class="ms-1" name="approved_system" value="by_builder">
                 BY OWNER <input type="checkbox" class="ms-1" name="approved_system" value="by_owner">
                 or N.A. TOWN SEWER <input type="checkbox" class="ms-1" name="approved_system" value="na_town_sewer">
             </p>
             <p>- If by builder:
                 1) Fixed price included in quote <input type="checkbox" class="ms-1" name="builder_price" value="fixed_price">
                 or 2) Provisional Sum <input type="checkbox" class="ms-1" name="builder_price" value="provisional_sum">
             </p>
             <p>- Aerated/septic system show location of tank on plan
                 <input type="checkbox" class="ms-1" name="septic_location" value="yes">
             </p>
             <p>- Aerated/septic system connection show approved sprinkler system location on plan
                 <input type="checkbox" class="ms-1" name="sprinkler_location" value="yes">
             </p>
             <p>- Existing septic or "system by owner" show location of system and sprinkler area on plan
                 <input type="checkbox" class="ms-1" name="existing_system_location" value="yes">
             </p>

             <div class="mt-3">
                 Notes to above:
                 <textarea class="form-control mt-2" rows="3" name="sewerage_notes" placeholder=".............................................................................."></textarea>
             </div>

             <p class="mt-3"><strong>Note:</strong> Allowance for sewer pipe connection to sewer main or tank is 10m from the last pickup point at house. Extra over 10m will be charged at $55.00 per meter including builder's margin and GST. Allowance is made for standard authority connection fee to sewer only (if applicable), extra contributions, levies, or access fees are payable by owners.</p>
         </div>
     </div>
 </div>


 <!-- Container for Section 3 -->
 <div class="card p-4 my-3">
     <div class="card p-4">

         <!-- Section 3.3 -->
         <div class="mb-4 rounded p-3">
             <h5 class="mb-2">3.3 Stormwater</h5>
             <div class="d-flex align-items-center flex-wrap mb-2">
                 <span>Town Stormwater</span>
                 <input type="checkbox" name="stormwater_town" class="ms-1 me-3">
                 <span>To Tank/s</span>
                 <input type="checkbox" name="stormwater_tank" class="ms-1 me-3">
                 <span>Rubble Pitts</span>
                 <input type="checkbox" name="stormwater_rubble" class="ms-1 me-3">
                 <span>Existing</span>
                 <input type="checkbox" name="stormwater_existing" class="ms-1">
             </div>
             <ul class="mb-2 ps-3">
                 <li>To tank/s then (A) show location of tank on plan</li>
                 <li>(B) Are pressurised PVC down pipes required?
                     <input type="checkbox" name="pvc_required" value="yes" class="ms-1"> Yes
                     <input type="checkbox" name="pvc_required" value="no" class="ms-2"> No
                 </li>
                 <li>Rubble pit then show location and design on plan</li>
                 <li>Existing or "by owner" then show location on plan</li>
             </ul>
             <p class="small"><strong>Note:</strong> Allowance for stormwater pipe connection to stormwater main, tank, or rubble pit is 10 (ten) meters from the last pick-up point at the house. Extra over 10 meters will be charged at a rate of $36.00 per meter, including builder's margin and GST.</p>
             <p>Notes to above:</p>
             <textarea name="stormwater_notes" rows="2" class="form-control" placeholder="................................................................................"></textarea>
         </div>
     </div>
     <!-- Section 3.4 -->

     <div class="mb-4 rounded p-3">
         <h6 class="mb-2">3.4 Plumbing Layout Plan</h6>
         <div class="d-flex align-items-center flex-wrap mb-2">
             <span>As per plans provided, completed, and signed by owners</span>
             <input type="checkbox" name="plumbing_plan_provided" class="ms-1 me-3">
         </div>
         <p class="small"><strong>Note:</strong> This plan is to include the preferred position of: Rainwater tank/s (if applicable) including position of designated fire tank (if applicable), Water pump (if applicable), BASIX rainwater storage tank, Hot water tank and or solar panels, shower rose's and tap handles, bath spouts and tap handles, washing machine cocks (under tub or cupboard or over machine), Dishwasher cock, Spa Bath pump (if applicable), outside taps, and Gas points & Bottles (if applicable). Locations may be subject to change by plumber if required; however the owner will be notified if changes are required.</p>
         <p>Final kitchen layout plan provided (To show gas/dishwasher/sink etc.):
             <input type="checkbox" name="kitchen_layout" value="yes" class="ms-1"> Yes
             <input type="checkbox" name="kitchen_layout" value="no" class="ms-2"> No
         </p>
     </div>


     <!-- Section 3.5 -->
     <div class="card p-4 my-3">

         <div class="rounded p-3">
             <h5 class="mb-2">3.5 Water Services</h5>
             <div class="d-flex align-items-center flex-wrap mb-2">
                 <span>Town Supply & BASIX Rainwater System</span>
                 <input type="checkbox" name="water_service" value="town_basix" class="ms-1 me-3">
                 <span>Tank Supply</span>
                 <input type="checkbox" name="water_service" value="tank" class="ms-1 me-3">
                 <span>Town & Tank</span>
                 <input type="checkbox" name="water_service" value="town_tank" class="ms-1 me-3">
                 <span>Existing</span>
                 <input type="checkbox" name="water_service" value="existing" class="ms-1">
             </div>
             <p>- Water service type:</p>
             <div class="d-flex align-items-center mb-2">
                 <span>Standard hot & cold water</span>
                 <input type="checkbox" name="water_type" value="standard" class="ms-1 me-3">
                 <span>ALL copper hot & cold (additional cost)</span>
                 <input type="checkbox" name="water_type" value="copper" class="ms-1">
             </div>
             <p>- Water tank supply:</p>
             <div class="d-flex align-items-center mb-2">
                 <span>By owner</span>
                 <input type="checkbox" name="tank_supply" value="owner" class="ms-1 me-3">
                 <span>By builder</span>
                 <input type="checkbox" name="tank_supply" value="builder" class="ms-1 me-3">
             </div>
             <div class="mb-2">
                 <span>Type:</span>
                 <input type="text" name="tank_type" class="form-control d-inline-block ms-1" style="width:150px;" value="POLY">
                 <span class="ms-3">Size:</span>
                 <input type="text" name="tank_size" class="form-control d-inline-block ms-1" style="width:100px;" value="1500 x 2">
             </div>
         </div>


         <!-- Water Pump -->
         <div class="mb-3">
             <p>- Water pump:</p>
             <div class="ms-4">
                 <label>
                     <input type="checkbox" name="water_pump" value="owner"> By owner
                 </label>
                 <label class="ms-3">
                     <input type="checkbox" name="water_pump" value="builder"> By builder
                 </label>
             </div>
         </div>

         <!-- BASIX Tank -->
         <div class="mb-3">
             <p>- BASIX tank supply:</p>
             <div class="ms-4">
                 <label>
                     <input type="checkbox" name="basix_tank" value="owner"> By owner
                 </label>
                 <label class="ms-3">
                     <input type="checkbox" name="basix_tank" value="builder"> By builder
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
                     <input type="checkbox" name="hot_water_service" value="fixed_price"> Fixed price included in quote
                 </label>
                 <label class="ms-3">
                     <input type="checkbox" name="hot_water_service" value="provisional_sum"> Provisional Sum
                 </label>
             </div>
         </div>

         <!-- Hot Water Service Type -->
         <div class="mb-3">
             <p>- Hot water service type:</p>
             <div class="ms-4">
                 <label><input type="checkbox" name="hot_water_type[]" value="solar"> Solar</label>
                 <label class="ms-3"><input type="checkbox" name="hot_water_type[]" value="electric"> Electric</label>
                 <label class="ms-3"><input type="checkbox" name="hot_water_type[]" value="combination"> Combination</label>
                 <label class="ms-3"><input type="checkbox" name="hot_water_type[]" value="heat_pump"> Heat pump</label>
                 <label class="ms-3"><input type="checkbox" name="hot_water_type[]" value="gas"> Gas</label>
                 <label class="ms-3"><input type="checkbox" name="hot_water_type[]" value="other"> Other</label>
             </div>
         </div>

         <!-- Solar Hot Water Booster -->
         <div class="mb-3">
             <p>- Solar hot water booster:</p>
             <div class="ms-4">
                 <label><input type="checkbox" name="solar_booster" value="electric"> Electric</label>
                 <label class="ms-3"><input type="checkbox" name="solar_booster" value="gas"> Gas</label>
             </div>
         </div>

         <!-- Solar Hot Water Tank -->
         <div class="mb-3">
             <p>- Solar hot water tank:</p>
             <div class="ms-4">
                 <label><input type="checkbox" name="solar_tank" value="roof"> On Roof</label>
                 <label class="ms-3"><input type="checkbox" name="solar_tank" value="ground"> On Ground</label>
             </div>
         </div>

         <!-- Special Installations -->
         <div class="mb-3">
             <p>- Special installations:</p>
             <div class="ms-4">
                 <label><input type="checkbox" name="special_installations[]" value="water_to_fridge"> Water to fridge</label>
                 <label class="ms-3"><input type="checkbox" name="special_installations[]" value="hot_water_to_dishwasher"> Hot water to dishwasher</label>
                 <label class="ms-3"><input type="checkbox" name="special_installations[]" value="other"> Other</label>
             </div>
         </div>

         <!-- Notes Box -->
         <div class="mb-3">
             <p>Notes to above:</p>
             <textarea class="form-control" name="notes" rows="3"></textarea>
         </div>
         <!-- Q1: Warning Section -->
         <div class="p-3 mb-3 bg-warning-subtle">
             <p><strong>IMPORTANT</strong></p>
             <p>Water supply and services in fire risk areas may have specific requirements to meet council consent. Conditions of development application <strong>MUST</strong> be checked prior to finalisation of selections.</p>
             <p>Checked: <input type="checkbox" name="fire_risk_checked" value="checked" class="ms-2 me-2"> Bushfire Attack Level</p>
             <p>(N/A, 12.5, 19, 29, 40, FZ as per AS3959-2009)</p>
             <p>Checked By: <input type="text" name="checked_by" value="Inspector Name" class="form-control d-inline-block" style="width: 200px;"></p>
         </div>
     </div>

     <!-- Main section -->
     <div class="p-4 my-3">

         <!-- Q2: Tapware -->
         <div class="card p-4 my-3">
             <h5>3.6 Tapware & PC Items </h5>
             <div class="d-flex align-items-center mb-2">
                 <span>Per PC Selection Section</span>
                 <input type="checkbox" name="pc_selection" value="yes" class="ms-1 me-3">
             </div>
             <p>🛈 <strong>Note:</strong> PC items with special requirements should have installation instructions from the manufacturer also attached.
                 <input type="checkbox" name="pc_checked" value="checked" class="ms-2"> (Checked)
             </p>
         </div>

         <!-- Q3: Gasfitter -->
         <div class="card p-4 my-3">
             <h5>3.7 Gasfitter</h5>
             <p>
                 <span>Natural Gas <input type="checkbox" name="natural_gas" value="yes" class="ms-1 me-3"></span>
                 <span>LPG Gas <input type="checkbox" name="lpg_gas" value="yes" class="ms-1 me-3"></span>
                 <span>N/A <input type="checkbox" name="gas_na" value="yes" class="ms-1"></span>
             </p>
             <p>- Gas service to:
                 <span class="ms-3">Hot water <input type="checkbox" name="hot_water" value="yes" class="ms-1 me-3"></span>
                 <span>Oven <input type="checkbox" name="oven" value="yes" class="ms-1 me-3"></span>
                 <span>Cook top <input type="checkbox" name="cook_top" value="yes" class="ms-1 me-3"></span>
                 <span>Bayonet’s No: <input type="text" name="bayonet_no" value="0" class="ms-1" style="width: 60px;"></span>
             </p>
             <p>- Gas points and appliances etc. shown on plumbing layout plan <input type="checkbox" name="gas_layout_plan" value="yes" class="ms-1 me-3"></p>

             <!-- Q4: Notes -->
             <div class="p-3 mb-3 bg-light">
                 <p>📝 Notes to above:</p>
                 <textarea class="form-control" name="notes" rows="2">Enter notes here...</textarea>
             </div>
         </div>


         <!-- Q5: Section Note -->
         <div class="p-3 bg-warning-subtle">
             <p class="mb-0"><strong>Drainer-Plumber-Gas Fitter Section Note:</strong><br>
                 No allowance has been made in the event of rock excavation and the resultant extra construction time. Any rock excavation and extra construction time required will be charged at an hourly rate of builder's cost plus builder’s margin and GST. This rate will be inclusive of both labour and equipment hire.
             </p>
         </div>

     </div>