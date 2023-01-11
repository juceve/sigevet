<div>
    @section('css')
        <style>
            .pt-3-half {
  padding-top: 1.4rem;
}
        </style>
    @endsection
<!-- Editable table -->
<div class="card">
    <h3 class="card-header text-center font-weight-bold text-uppercase py-4">
      Editable table
    </h3>
    <div class="card-body">
      <div id="table" class="table-editable">
        <span class="table-add float-right mb-3 mr-2"
          ><a href="#!" class="text-success"
            ><i class="fas fa-plus fa-2x" aria-hidden="true"></i></a
        ></span>
        <table class="table table-bordered table-responsive-md table-striped text-center">
          <thead>
            <tr>
              <th class="text-center">Person Name</th>
              <th class="text-center">Age</th>
              <th class="text-center">Company Name</th>
              <th class="text-center">Country</th>
              <th class="text-center">City</th>
              <th class="text-center">Sort</th>
              <th class="text-center">Remove</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
              <td class="pt-3-half" contenteditable="true">30</td>
              <td class="pt-3-half" contenteditable="true">Deepends</td>
              <td class="pt-3-half" contenteditable="true">Spain</td>
              <td class="pt-3-half" contenteditable="true">Madrid</td>
              <td class="pt-3-half">
                <span class="table-up"
                  ><a href="#!" class="indigo-text"
                    ><i class="fas fa-long-arrow-alt-up" aria-hidden="true"></i></a
                ></span>
                <span class="table-down"
                  ><a href="#!" class="indigo-text"
                    ><i class="fas fa-long-arrow-alt-down" aria-hidden="true"></i></a
                ></span>
              </td>
              <td>
                <span class="table-remove"
                  ><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">
                    Remove
                  </button></span
                >
              </td>
            </tr>
            <!-- This is our clonable table line -->
            <tr>
              <td class="pt-3-half" contenteditable="true">Guerra Cortez</td>
              <td class="pt-3-half" contenteditable="true">45</td>
              <td class="pt-3-half" contenteditable="true">Insectus</td>
              <td class="pt-3-half" contenteditable="true">USA</td>
              <td class="pt-3-half" contenteditable="true">San Francisco</td>
              <td class="pt-3-half">
                <span class="table-up"
                  ><a href="#!" class="indigo-text"
                    ><i class="fas fa-long-arrow-alt-up" aria-hidden="true"></i></a
                ></span>
                <span class="table-down"
                  ><a href="#!" class="indigo-text"
                    ><i class="fas fa-long-arrow-alt-down" aria-hidden="true"></i></a
                ></span>
              </td>
              <td>
                <span class="table-remove"
                  ><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">
                    Remove
                  </button></span
                >
              </td>
            </tr>
            <!-- This is our clonable table line -->
            <tr>
              <td class="pt-3-half" contenteditable="true">Guadalupe House</td>
              <td class="pt-3-half" contenteditable="true">26</td>
              <td class="pt-3-half" contenteditable="true">Isotronic</td>
              <td class="pt-3-half" contenteditable="true">Germany</td>
              <td class="pt-3-half" contenteditable="true">Frankfurt am Main</td>
              <td class="pt-3-half">
                <span class="table-up"
                  ><a href="#!" class="indigo-text"
                    ><i class="fas fa-long-arrow-alt-up" aria-hidden="true"></i></a
                ></span>
                <span class="table-down"
                  ><a href="#!" class="indigo-text"
                    ><i class="fas fa-long-arrow-alt-down" aria-hidden="true"></i></a
                ></span>
              </td>
              <td>
                <span class="table-remove"
                  ><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">
                    Remove
                  </button></span
                >
              </td>
            </tr>
            <!-- This is our clonable table line -->
            <tr class="hide">
              <td class="pt-3-half" contenteditable="true">Elisa Gallagher</td>
              <td class="pt-3-half" contenteditable="true">31</td>
              <td class="pt-3-half" contenteditable="true">Portica</td>
              <td class="pt-3-half" contenteditable="true">United Kingdom</td>
              <td class="pt-3-half" contenteditable="true">London</td>
              <td class="pt-3-half">
                <span class="table-up"
                  ><a href="#!" class="indigo-text"
                    ><i class="fas fa-long-arrow-alt-up" aria-hidden="true"></i></a
                ></span>
                <span class="table-down"
                  ><a href="#!" class="indigo-text"
                    ><i class="fas fa-long-arrow-alt-down" aria-hidden="true"></i></a
                ></span>
              </td>
              <td>
                <span class="table-remove"
                  ><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">
                    Remove
                  </button></span
                >
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- Editable table -->
</div>
@section('js')
    <script>
        const $tableID = $('#table'); const $BTN = $('#export-btn'); const $EXPORT = $('#export');
  const newTr = `
  <tr class="hide">
    <td class="pt-3-half" contenteditable="true">Example</td>
    <td class="pt-3-half" contenteditable="true">Example</td>
    <td class="pt-3-half" contenteditable="true">Example</td>
    <td class="pt-3-half" contenteditable="true">Example</td>
    <td class="pt-3-half" contenteditable="true">Example</td>
    <td class="pt-3-half">
      <span class="table-up"
        ><a href="#!" class="indigo-text"
          ><i class="fas fa-long-arrow-alt-up" aria-hidden="true"></i></a
      ></span>
      <span class="table-down"
        ><a href="#!" class="indigo-text"
          ><i class="fas fa-long-arrow-alt-down" aria-hidden="true"></i></a
      ></span>
    </td>
    <td>
      <span class="table-remove"
        ><button
          type="button"
          class="btn btn-danger btn-rounded btn-sm my-0 waves-effect waves-light"
        >
          Remove
        </button></span
      >
    </td>
  </tr>
  `;
  $('.table-add').on('click', 'i', () => {
    const $clone = $tableID.find('tbody
        tr ').last().clone(true).removeClass('
        hide table - line '); if ($tableID.find('
        tbody tr ').length ===
        0) {
        $('tbody').append(newTr);
    }
    $tableID.find('table').append($clone);
});
$tableID.on('click', '.table-remove', function() {
    $(this).parents('tr').detach();
});
$tableID.on('click', '.table-up', function() {
    const $row = $(this).parents('tr');
    if ($row.index() === 0) {
        return;
    }
    $row.prev().before($row.get(0));
});
$tableID.on('click',
    '.table-down',
    function() {
        const $row = $(this).parents('tr');
        $row.next().after($row.get(0));
    }); // A few jQuery helpers for exporting only jQuery.fn.pop
= [].pop;
jQuery.fn.shift = [].shift;
$BTN.on('click', () => {
    const $rows =
        $tableID.find('tr:not(:hidden)');
    const headers = [];
    const data = []; // Get the headers
    (add special header logic here) $($rows.shift()).find('th:not(:empty)').each(function() {
        headers.push($(this).text().toLowerCase());
    }); // Turn all existing rows into a loopable
    array $rows.each(function() {
        const $td = $(this).find('td');
        const h = {}; // Use the
        headers from earlier to name our hash keys headers.forEach((header, i) => {
            h[header] =
                $td.eq(i).text();
        });
        data.push(h);
    }); // Output the result
    $EXPORT.text(JSON.stringify(data));
});
    </script>
@endsection
