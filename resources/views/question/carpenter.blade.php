<!-- Section Title -->

<!-- Section 4.1 -->
<!-- Section 4.1 -->
<div class="card p-4 my-3">
    <h4 class="mb-4">4) CARPENTER (Construction & Exterior)</h4>

    <h6>4.1 Steel House Floor System</h6>
    <div class="d-flex align-items-center mb-2">
        <label class="me-2">Per Plans & Specifications</label>
        <input type="radio" name="sow[carpenter][plans_specifications]" value="yes" class="form-check-input" checked>

        <label class="me-2">N/A</label>
        <input type="radio" name="sow[carpenter][plans_specifications]" value="na" class="form-check-input">
    </div>

    <table class="table table-bordered">
        <tr>
            <td>- Termite resistant particle board floor sheeting:</td>
            <td>
                <labelclass="form-check-input">N/A</label>
                    <input type="radio" name="sow[carpenter][termite_resistant]" value="na" class="form-check-input">
            </td>
            <td>
                <labelclass="form-check-input">Yes</label>
                    <input type="radio" name="sow[carpenter][termite_resistant]" value="yes" class="form-check-input" checked>
            </td>
        </tr>
        <tr>
            <td>- Other:</td>
            <td>
                <labelclass="form-check-input">N/A</label>
                    <input type="radio" name="sow[carpenter][other]" value="na" class="form-check-input" checked>
            </td>
            <td>
                <labelclass="form-check-input">Yes</label>
                    <input type="radio" name="sow[carpenter][other]" value="yes" class="form-check-input">
            </td>
        </tr>
        <tr>
            <td>- Floor Insulation:</td>
            <td>
                <labelclass="form-check-input">N/A</label>
                    <input type="radio" name="sow[carpenter][floor_insulation]" value="na" class="form-check-input" checked>
            </td>
            <td>
                <labelclass="form-check-input">Yes</label>
                    <input type="radio" name="sow[carpenter][floor_insulation]" value="yes" class="form-check-input">
            </td>
        </tr>
    </table>

    <div class="d-flex align-items-center mt-3">
        <label for="steel_house_floor_system" class="me-2 mb-0">Notes to above:</label>
        <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
            name="sow[carpenter][steel_house_floor_system_notes]"
            id="steel_house_floor_system"
            placeholder="Enter steel house floor system notes">
    </div>
</div>


<!-- Section 4.2 -->
<div class="card p-4 my-3">
    <h6>4.2 Steel Verandah Floor System</h6>
    <div class="d-flex align-items-center mb-2">
        <span>Per Plans & Specifications</span>
        <input type="radio" name="sow[carpenter][verandah_plans_specifications]" value="yes" class="form-check-input">
        <span>N/A</span>
        <input type="radio" name="sow[carpenter][verandah_plans_specifications]" value="no" class="form-check-input" checked>
    </div>

    <table class="table table-bordered">
        <tr>
            <td>- Fibrous cement floor sheeting:</td>
            <td>
                N/A <input type="radio" name="sow[carpenter][fibrous_cement]" value="no" class="form-check-input" checked>
            </td>
            <td>
                <input type="radio" name="sow[carpenter][fibrous_cement]" value="yes" class="form-check-input">
            </td>
        </tr>
        <tr>
            <td>- Treated pine decking:</td>
            <td>
                N/A <input type="radio" name="sow[carpenter][treated_pine]" value="no" class="form-check-input" checked>
            </td>
            <td>
                <input type="radio" name="sow[carpenter][treated_pine]" value="yes" class="form-check-input">
            </td>
        </tr>
        <tr>
            <td>- Hardwood decking:</td>
            <td>
                N/A <input type="radio" name="sow[carpenter][hardwood_decking]" value="no" class="form-check-input" checked>
            </td>
            <td>
                <input type="radio" name="sow[carpenter][hardwood_decking]" value="yes" class="form-check-input"> (Timber Selection)
            </td>
        </tr>
    </table>
    <div class="d-flex align-items-center">
        <label for="steel_verandah_floor_system" class="me-2 mb-0">Notes to above:</label>
        <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
            name="sow[site_work][steel_verandah_floor_system]" id="steel_verandah_floor_system" placeholder="Enter steel verandah floor system notes">
    </div>
</div>

<!-- Section 4.3 -->
<div class="card p-4 my-3">
    <h6>4.3 Timber Verandah Floor System</h6>
    <div class="d-flex align-items-center mb-2">
        <span>Per Plans & Specifications</span>
        <input type="radio" name="sow[carpenter][timber_verandah_plans_specifications]" value="yes" class="form-check-input">
        <span>N/A</span>
        <input type="radio" name="sow[carpenter][timber_verandah_plans_specifications]" value="na" class="form-check-input" checked>
    </div>

    <table class="table table-bordered">
        <tr>
            <td colspan="3">
                Per Plans & Specifications
                <input type="radio" name="sow[carpenter][timber_verandah_per_plans]" value="yes" class="form-check-input">
                N/A
                <input type="radio" name="sow[carpenter][timber_verandah_per_plans]" value="no" class="form-check-input">
            </td>
        </tr>
    </table>

    <div class="p-3 mt-3" style="background-color: #e8f4ff;">
        <p>🛈 <strong>Floor Systems Note 1:</strong> Floor systems in fire risk areas may have specific requirements to meet council consent, such as fibre cement sheet lining under...</p>
        <p>🛈 <strong>Floor Systems Note 2:</strong> Conditions of Development Consent, Bushfire Assessment...
            <input type="radio" name="sow[carpenter][bushfire_assessment]" value="yes" class="form-check-input"> (Checked)
        </p>
    </div>
    <div class="d-flex align-items-center">
        <label for="timber_verandah_floor_system" class="me-2 mb-0">Notes to above:</label>
        <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
            name="sow[site_work][timber_verandah_floor_system]" id="timber_verandah_floor_system" placeholder="Enter timber verandah floor system notes">
    </div>
</div>


<!-- Section 4.4 -->
<div class="card p-4 my-3">
    <h6>4.4 Frames</h6>

    <div class="d-flex align-items-center mb-2">
        <span>Per Plans & Specifications</span>
        <input type="radio" name="sow[carpenter][frames_plans_specifications]" value="yes" class="form-check-input" checked>
    </div>

    <p>
        - Standard 2750mm high (nom.)
        <input type="radio" name="sow[carpenter][standard_height]" value="yes" class="form-check-input" checked>
        Other heights:
        <input type="text" name="sow[carpenter][other_heights]" class="form-check-input" style="width: 150px;" checked>
    </p>

    <p>
        - Window & door sizes as per section 8 “windows & entry doors”
        <input type="radio" name="sow[carpenter][window_door_sizes]" value="yes" class="form-check-input"> (Checked)
    </p>

    <p>
        - Sisalation foil (sarking) to wall exterior prior to cladding <br>
        <input type="radio" name="sow[carpenter][sisalation_standard]" value="yes" class="form-check-input" checked> Standard
        <input type="radio" name="sow[carpenter][sisalation_standard]" value="na" class="form-check-input">
        Other: <input type="text" name="sow[carpenter][sisalation_other_text]" class="ms-2" style="width: 150px;">
    </p>
    <div class="d-flex align-items-center">

        <!-- Label and Input -->

        <label for="frames" class="me-2 mb-0">Notes to above:</label>
        <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
            name="sow[site_work][frames]" id="frames" placeholder="Enter Frames notes">
    </div>
</div>


<div class="card p-4 my-3">

    <!-- Section 4.5 -->
    <h5 class="mt-4">4.5 Roof Trusses & Beams</h5>

    <!-- Q1 -->
    <div class="card p-3 my-2 ">
        <div class="d-flex align-items-center mb-2">
            <span>Per Council Approved Plans & Specifications</span>
            <input type="radio" name="sow[carpenter][approved_plans]" value="yes" class="form-check-input" checked>
            <span>N/A</span>
            <input type="radio" name="sow[carpenter][approved_plans]" value="na" class="form-check-input">
        </div>
    </div>

    <!-- Q2 -->
    <div class="card p-3 my-2 ">
        <div>Ceiling type:</div>
        <div class="d-flex flex-wrap">
            <div><input type="radio" name="sow[carpenter][ceiling_type]" value="standard_level" class="form-check-input" checked> Standard level</div>
            <div><input type="radio" name="sow[carpenter][ceiling_type]" value="raked" class="form-check-input"> Raked</div>
            <div><input type="radio" name="sow[carpenter][ceiling_type]" value="scissor_raked" class="form-check-input"> Scissor raked</div>
            <div><input type="radio" name="sow[carpenter][ceiling_type]" value="other" class="form-check-input"> Other</div>
        </div>
    </div>


    <div class="card p-3 my-2 ">
        <div class="d-flex align-items-center">
            <span>If "Not standard level" - check plans type/location etc.</span>
            <input type="radio" name="sow[carpenter][per_plans_specifications]" value="yes" class="form-check-input">

        </div>
    </div>
    <div class="d-flex align-items-center">

        <!-- Label and Input -->

        <label for="steel_house_floor_system" class="me-2 mb-0">Notes to above:</label>
        <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
            name="sow[site_work][steel_house_floor_system]" id="steel_house_floor_system" placeholder="Enter steel house floor system notes">
    </div>
</div>

<!-- Q4 -->

<!-- Section 4.6 -->
<div class="card p-4 my-3">

    <h5 class="mt-4">4.6 Verandahs</h5>

    <!-- Q5 -->
    <div class="card p-3 my-2 ">
        <div class="d-flex align-items-center mb-2">
            <span>Per Plans & Specifications</span>
            <input type="radio" name="sow[carpenter][verandah_plans_specifications]" value="yes" class="form-check-input" checked>
            <span>N/A</span>
            <input type="radio" name="sow[carpenter][verandah_plans_specifications]" value="na" class="form-check-input">
        </div>
    </div>

    <!-- Q6 -->
    <div class="card p-3 my-2">
        <div>
            <input type="radio" name="sow[carpenter][verandah_type]" value="broken_pitch" class="form-check-input" checked>
            Broken pitch off main roof, raked fibre cement sheet lining under
        </div>
        <div>
            <input type="radio" name="sow[carpenter][verandah_type]" value="dropped_verandah" class="form-check-input">
            Dropped verandah, raked fibre cement sheet lining under
        </div>
        <div>
            <input type="radio" name="sow[carpenter][verandah_type]" value="raked_broken_pitch" class="form-check-input">
            Raked or broken pitch verandah’s with level linings (subject to heights)
        </div>
        <div>
            <input type="radio" name="sow[carpenter][verandah_type]" value="under_main_roof" class="form-check-input">
            Under main roof with fibre cement sheet level linings
        </div>
        <div>
            <input type="radio" name="sow[carpenter][verandah_type]" value="bull_nose_roof" class="form-check-input">
            Bull nose roof std. treated pine posts, beams, whaling plate and hockey stick rafters
        </div>
        <small><strong>Note :</strong>: Bullnose verandah's over 1.8metre's may require "hockey stick rafters" and battens. At 1.8metres or less verandah's only require hip & gable end rafters.</small>

        <div>
            <input type="radio" name="sow[carpenter][verandah_type]" value="other" class="form-check-input">
            Other verandah type:
            <input type="text" name="sow[carpenter][other_verandah_type]" class="form-control mt-1" placeholder="Specify other verandah type">
        </div>
        <small><strong>Note :</strong>: For "other verandah" types check plans/specifications as required (eg: Members to be timber, timber type, size, dressed sawn etc).</small>

    </div>

    <!-- Q7 -->
    <div class="card p-3 my-2">
        <div>Notes to above:</div>
        <input type="text" name="sow[carpenter][notes_to_above]" class="form-control mt-1" placeholder="Enter your notes here...">
    </div>


    <!-- Q8 -->
    <div class="card p-3 my-2">
        <div class="d-flex align-items-center">
            <span>Per Plans & Specifications</span>
            <input type="radio" name="sow[carpenter][q8_option]" value="per_plans" class="form-check-input">
            <span>N/A</span>
            <input type="radio" name="sow[carpenter][q8_option]" value="na" class="form-check-input" checked>
        </div>
    </div>


    <!-- Section 4.7 -->
    <h5 class="mt-4">4.7 External Stairs</h5>

    <!-- Q9 -->
    <div class="card p-3 my-2">
        <div class="d-flex align-items-center mb-2">
            <span>Per Plans & Specifications</span>
            <input type="radio" name="sow[carpenter][q9_option]" value="per_plans" class="form-check-input">
            <span>N/A</span>
            <input type="radio" name="sow[carpenter][q9_option]" value="na" class="form-check-input" checked>
        </div>
    </div>

    <!-- Q10 -->
    <div class="card p-3 my-2">
        <div>- If by builder:</div>
        <div class="d-flex flex-wrap">
            <div>
                <input type="radio" name="sow[carpenter][q10_option]" value="fixed_price" class="form-check-input" checked>
                Fixed price included in quote
            </div>
            <div>
                <input type="radio" name="sow[carpenter][q10_option]" value="provisional_sum" class="form-check-input">
                Provisional Sum
            </div>
        </div>
    </div>


    <!-- Q11 -->
    <div class="card p-3 my-2">
        <div>- Tread type:</div>
        <div class="d-flex flex-wrap">
            <div>
                <input type="radio" name="sow[carpenter][q11_tread_type]" value="precast_concrete" class="form-check-input" checked>
                Precast concrete
            </div>
            <div>
                <input type="radio" name="sow[carpenter][q11_tread_type]" value="treaded_pine" class="form-check-input">
                Treaded pine
            </div>
            <div>
                <input type="radio" name="sow[carpenter][q11_tread_type]" value="hardwood" class="form-check-input">
                Hardwood
            </div>
        </div>
    </div>


    <!-- Q12 -->
    <div class="card p-3 my-2">
        <div class="d-flex align-items-center">
            <span>Per Plans & Specifications</span>
            <input type="radio" name="sow[carpenter][q12_approval]" value="per_plans" class="form-check-input" checked>
            <span>N/A</span>
            <input type="radio" name="sow[carpenter][q12_approval]" value="na" class="form-check-input">
        </div>
    </div>



    <!-- Hardwood Options -->
    <!-- Hardwood Options -->
    <div class="mt-4">
        <h5>Hardwood Options</h5>
        <div>- If <strong>“Hardwood”</strong> then:</div>
        <div class="mt-2">
            <input type="radio" name="sow[carpenter][hardwood_option]" value="sawn_unseasoned" class="form-check-input"> Sawn unseasoned

            <input type="radio" name="sow[carpenter][hardwood_option]" value="dressed_seasoned" class="form-check-input"> Dressed seasoned – Type e.g. Merbau
            <input type="text" name="dressed_seasoned_type" class="ms-1 form-control d-inline-block w-auto" placeholder="............................">

            <input type="radio" name="sow[carpenter][hardwood_option]" value="kiln_dried_dressed" class="form-check-input"> Kiln dried dressed – Type e.g. Spotted Gum
            <input type="text" name="sow[carpenter][kiln_dried_dressed_type]" class="ms-1 form-control d-inline-block w-auto" placeholder="............................">
        </div>
    </div>

    <!-- Important Section -->
    <!-- Important Section -->
    <div class="p-3 my-4" style="background-color: #f97316; color: #fff; border: 2px solid #000;">
        <h5><strong>IMPORTANT!</strong></h5>
        <p class="mb-1">
            Timber Stairs in fire risk areas may have specific requirements to meet council consent.
            Conditions of development application <strong>MUST</strong> be checked prior to finalisation of selections.
        </p>

        <div class="d-flex align-items-center mb-1">
            <div>Checked: <input type="radio" name="sow[carpenter][checked]" value="yes" class="form-check-input"></div>
            <div>Bushfire Attack Level</div>
        </div>

        <div class="mb-1">
            Checked By: <input type="text" name="sow[carpenter][checked_by]" class="form-control d-inline-block w-auto" placeholder="Enter name">
        </div>

        <small>(N/A; 12.5, 19, 29, 40, FZ as per AS3959-2009)</small>
    </div>
    <div class="d-flex align-items-center">

        <!-- Label and Input -->

        <label for="verandahs" class="me-2 mb-0">Notes to above:</label>
        <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
            name="sow[site_work][verandahs]" id="verandahs" placeholder="Enter verandahs notes">
    </div>
</div>


<!-- Section 4.8 -->
<div class="mt-4">
    <h5>4.8 Features / Trims etc</h5>

    <!-- Question Block 1 -->
    <div class="mb-2">
        <input type="radio" name="sow[carpenter][options]" value="na" class="form-check-input"> N/A
        <input type="radio" name="sow[carpenter][options]" value="locations_per_plans" class="form-check-input"> Locations per plans
        <input type="radio" name="sow[carpenter][options]" value="selections_attached" class="form-check-input"> Selections/type etc. attached
    </div>


    <!-- Question Block 2 -->
    <div class="mb-2">
        - Gable Vents:
        <input type="radio" name="sow[carpenter][gable_vents]" value="required" class="form-check-input"> Required
        <input type="radio" name="sow[carpenter][gable_vents]" value="na" class="form-check-input"> N/A
        <input type="radio" name="sow[carpenter][gable_vents]" value="decorative_only" class="form-check-input"> Decorative only
        <input type="radio" name="sow[carpenter][gable_vents]" value="active_working" class="form-check-input"> Active/Working
        <input type="radio" name="sow[carpenter][gable_vents]" value="cut_out_hidden" class="form-check-input"> Cut out hidden
        <input type="radio" name="sow[carpenter][gable_vents]" value="decorative_brick_surround" class="form-check-input"> Decorative brick surround
    </div>


    <!-- Question Block 3 -->
    <div class="mb-2">
        - Gable friezes & finials:
        <input type="radio" name="sow[carpenter][gable_friezes_finials]" value="selection_attached" class="form-check-input"> Selection/type attached
        <input type="radio" name="sow[carpenter][gable_friezes_finials]" value="na" class="form-check-input"> N/A
    </div>

    <!-- Question Block 4 -->
    <div>
        - Verandah post decorative bases:
        <input type="radio" name="sow[carpenter][verandah_post_bases]" value="selection_attached" class="form-check-input"> Selection/type attached
        <input type="radio" name="sow[carpenter][verandah_post_bases]" value="na" class="form-check-input"> N/A
    </div>

</div>

<!-- Notes Section -->
<div class="mt-4">
    <h6>Notes to above:</h6>
    <textarea name="sow[carpenter][verandah_notes]" class="form-control mt-1" rows="3" placeholder="Enter any additional notes here..."></textarea>
</div>

</div>


<div class="card p-4 my-3">
    <!-- 4.9 Exterior Door Selections & Exterior Door Furniture -->
    <div class="mt-4">
        <h5>4.9 Exterior Door Selections & Exterior Door Furniture</h5>
        <p>- Door selections & Door furniture as per section 8 "Windows & Entry Doors"</p>
        <div class="form-check">
            <input type="radio" class="form-check-input" id="doorSelectionsChecked" name="sow[carpenter][door_selections_checked]">
            <label class="form-check-label" for="doorSelectionsChecked">(Checked)</label>
        </div>
    </div>


    <!-- 4.10 Eaves and Soffit Linings -->
    <div class="mt-4">
        <h5>4.10 Eaves and Soffit Linings</h5>

        <div class="form-check">
            <input type="radio" class="form-check-input" id="standardEaves" name="sow[carpenter][eaves_standard]">
            <label class="form-check-label" for="standardEaves">
                Standard Fibrous Cement Sheet lining to eaves with plastic joiners
            </label>
        </div>

        <div class="form-check mt-1">
            <input type="radio" class="form-check-input" id="otherEaves" name="sow[carpenter][eaves_other]">
            <label class="form-check-label" for="otherEaves">
                Other eaves lining:
            </label>
            <input type="text" class="form-control d-inline-block w-50 ms-2" name="sow[carpenter][eaves_other_text]" placeholder="Specify other eaves lining">
        </div>

        <div class="mt-2">
            <label for="eavesNotes">Notes to above:</label>
            <textarea class="form-control mt-1" id="eavesNotes" name="sow[carpenter][eaves_notes]" rows="2" placeholder="................................................................................................................"></textarea>
        </div>
    </div>


    <!-- 4.11 External Cladding -->
    <div class="mt-4">
        <h5>4.11 External Cladding</h5>

        <div class="d-flex align-items-center mb-2">
            <span>Per Plans & Specifications</span>
            <input type="radio" class="form-check-input" name="sow[carpenter][cladding_per_plans]">
            <span>N/A</span>
            <input type="radio" class="form-check-input" name="sow[carpenter][cladding_per_plans]">
        </div>

        <div class="mb-2">
            <input type="radio" class="form-check-input" name="sow[carpenter][cladding_timber_weathertex]">
            <label>Timber & Weathertex Weatherboard:</label>
            <input type="text" class="form-control d-inline-block w-auto ms-2" name="sow[carpenter][cladding_timber_type]" placeholder="Type">
            <input type="text" class="form-control d-inline-block w-auto ms-2" name="sow[carpenter][profile]" placeholder="Profile">
        </div>

        <div class="mb-2">
            <input type="radio" class="form-check-input" name="cladding_fibrous_weatherboard" checked>
            <label>Fibrous Cement Weatherboard:</label>
            <input type="text" class="form-control d-inline-block w-auto ms-2" name="sow[carpenter][cladding_fibrous_type]" placeholder="Type" value="SCYAM">
            <input type="text" class="form-control d-inline-block w-auto ms-2" name="sow[carpenter][cladding_fibrous_profile]" placeholder="Profile" value="STRIA">
        </div>

        <div class="mb-2">
            <input type="radio" class="form-check-input" name="cladding_fibrous_sheet">
            <label>Fibrous Cement Sheet or Other:</label>
            <input type="text" class="form-control d-inline-block w-auto ms-2" name="sow[carpenter][cladding_fibrous_other_type]" placeholder="Type">
            <input type="text" class="form-control d-inline-block w-auto ms-2" name="sow[carpenter][cladding_fibrous_other_profile]" placeholder="Profile">
        </div>

        <div class="mb-2">
            <input type="radio" class="form-check-input" name="cladding_metal">
            <label>Metal:</label>
            <input type="text" class="form-control d-inline-block w-auto ms-2" name="sow[carpenter][cladding_metal_type]" placeholder="Type">
            <input type="text" class="form-control d-inline-block w-auto ms-2" name="sow[carpenter][cladding_metal_profile]" placeholder="Profile">
            <input type="text" class="form-control d-inline-block w-auto ms-2" name="sow[carpenter][cladding_metal_colour]" placeholder="Colour">
        </div>

        <div class="mt-3">
            <label>Gable options:</label>
            <div class="mt-1">
                <input type="radio" class="form-check-input" name="sow[carpenter][gable_std_fibre_cement]" checked> Gables & walls "same as selected"
                <input type="radio" class="ms-4 me-1" name="sow[carpenter][gable_std_fibre_cement]"> Gables only in "Std. fibre cement sheet"
            </div>
        </div>

        <div class="mt-2">
            <label for="cladding_notes">Notes to above:</label>
            <textarea class="form-control mt-1" id="cladding_notes" name="sow[carpenter][cladding_notes]" rows="2" placeholder="................................................................................................................"></textarea>
        </div>
    </div>
</div>


<div class="card p-4 my-3">

    <!-- External Balustrade Section -->
    <div class="p-2 mb-3">
        <h5>4.12 External Balustrade</h5>
        <div class="d-flex align-items-center mb-2">
            <label class="me-3">
                <input type="radio" name="sow[carpenter][balustrade]" value="plans_specifications" class="form-check-input"> Per Plans & Specifications
            </label>
            <label class="me-3">
                <input type="radio" name="sow[carpenter][balustrade]" value="by_others" class="form-check-input"> By Others
            </label>
            <label>
                <input type="radio" name="sow[carpenter][balustrade]" value="na" class="form-check-input"> N/A
            </label>
        </div>
    </div>


    <!-- Question 2 -->
    <div class="p-2 mb-3">
        <label>- If by builder:</label>
        <div>
            <label>
                <input type="radio" name="sow[carpenter][builder_option]" value="fixed_price" class="form-check-input"> 1) Fixed price included in quote
            </label>
        </div>
        <div class="mt-1">
            <label>
                <input type="radio" name="sow[carpenter][builder_option]" value="provisional_sum" class="form-check-input"> 2) Provisional Sum
            </label>
            <span class="ms-2">Amount to be shown at Section 16 "Schedule of Provisional Sums"</span>
        </div>
    </div>


    <div class="p-2 mb-3">
        <label for="balustrade_manufacturer">- Balustrade manufacturer:</label>
        <input type="text" name="sow[carpenter][balustrade_manufacturer]" id="balustrade_manufacturer" class="form-control" value="">
    </div>


    <!-- Question 4 -->
    <div class="p-2 mb-3">
        <label>- Balustrade types:</label>
        <div class="row g-2">
            <div class="col-md-6">
                Type 1: <input type="text" name="sow[carpenter][balustrade_type_1]" class="form-control d-inline-block w-75" value="">
            </div>
            <div class="col-md-6">
                Location 1: <input type="text" name="sow[carpenter][balustrade_location_1]" class="form-control d-inline-block w-75" value="">
            </div>
            <div class="col-md-6">
                Type 2: <input type="text" name="sow[carpenter][balustrade_type_2]" class="form-control d-inline-block w-75" value="">
            </div>
            <div class="col-md-6">
                Location 2: <input type="text" name="sow[carpenter][balustrade_location_2]" class="form-control d-inline-block w-75" value="">
            </div>

            <div class="col-md-6">
                Type 3: <input type="text" name="sow[carpenter][balustrade_type_3]" class="form-control d-inline-block w-75" value="">
            </div>
            <div class="col-md-6">
                Location 3: <input type="text" name="sow[carpenter][balustrade_location_3]" class="form-control d-inline-block w-75" value="">
            </div>
        </div>
    </div>


    <!-- Notes Section -->
    <div class="p-2 mb-3">
        <p><i class="bi bi-info-circle"></i> <strong>Note 1:</strong> Balustrades to verandahs and/or stairs are required when the drop to ground is over 1 (One) metre.</p>
        <p><i class="bi bi-info-circle"></i> <strong>Note 2:</strong> Are there any special requirements for the builder such as fixing points or blocking?</p>
        <div>
            <input type="radio" name="sow[carpenter][checked_with_manufacturer]" class="form-check-input" value="1"> (Checked with Manufacturer)
        </div>
    </div>


    <!-- Notes to above -->
    <div class="p-2 mb-3">
        <label for="balustrade_notes"><i class="bi bi-clipboard"></i> Notes to above:</label>
        <textarea id="balustrade_notes" name="sow[carpenter][balustrade_notes]" class="form-control" rows="3" placeholder="Enter any relevant notes here..."></textarea>
    </div>


    <!-- Important Box -->
    <div class="p-3 mb-3" style="background: linear-gradient(to right, #ff7e5f, #feb47b); color: black;">
        <strong>IMPORTANT</strong>
        <p>Exposed exterior elements in fire risk areas may have specific requirements to meet council consent. Conditions of the development application <strong>MUST</strong> be checked prior to finalisation of selections.</p>

        <div class="d-flex align-items-center">
            <label class="me-2">Checked:</label>
            <input type="radio" name="sow[carpenter][fire_risk_checked]" checked class="form-check-input">
            <label>Bushfire Attack Level</label>
        </div>

        <div class="mt-2">
            <label for="checked_by">Checked By:</label>
            <input type="text" id="checked_by" name="sow[carpenter][checked_by]" class="form-control d-inline-block w-50 ms-2" placeholder="Signature or Name">
        </div>

        <small>(N/A, 12.5, 19, 29, 40, FZ as per AS3959-2009)</small>
    </div>

</div>