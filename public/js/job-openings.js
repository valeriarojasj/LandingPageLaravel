(function ($, window, document, undefined) {
  var pluginName = "editable";
  var defaults = {
    keyboard: true,
    dblclick: true,
    button: true,
    buttonSelector: ".edit",
    maintainWidth: true,
    dropdowns: {},
    edit: function () {},
    save: function () {},
    cancel: function () {}
  };

  function editable(element, options) {
    console.log(element)
    this.element = element;
    this.options = $.extend({}, defaults, options);

    this._defaults = defaults;
    this._name = pluginName;

    this.init();
  }

  editable.prototype = {
    init: function () {
      this.editing = false;

      if (this.options.dblclick) {
        $(this.element)
          .css("cursor", "pointer")
          .bind("dblclick", this.toggle.bind(this));
      }

      if (this.options.button) {
        $(this.options.buttonSelector, this.element).bind(
          "click",
          this.toggle.bind(this)
        );
      }
    },

    toggle: function (e) {
      e.preventDefault();

      this.editing = !this.editing;

      if (this.editing) {
        this.edit();
      } else {
        this.save();
      }
    },

    edit: function () {
      var instance = this,
        values = {};

      $("td[data-field]", this.element).each(function () {
        var input,
          field = $(this).data("field"),
          value = $(this).text(),
          width = $(this).width();
          values[field] = value;
          
        
        $(this).empty();

        if (instance.options.maintainWidth) {
          $(this).width(width);
        }

        if (field in instance.options.dropdowns) {
          input = $("<select></select>");

          for (var i = 0; i < instance.options.dropdowns[field].length; i++) {
            $("<option></option>")
              .text(instance.options.dropdowns[field][i])
              .appendTo(input);
          }

          input
            .val(value)
            .data("old-value", value)
            .dblclick(instance._captureEvent);
        } else {
          input = $('<input type="text" />')
            .val(value)
            .data("old-value", value)
            .dblclick(instance._captureEvent);
        }

        input.appendTo(this);

        if (instance.options.keyboard) {
          input.keydown(instance._captureKey.bind(instance));
        }
      });

      this.options.edit.bind(this.element)(values);
    },

    save: function () {
      var instance = this,
        values = {};

      $("td[data-field]", this.element).each(function () {
        var value = $(":input", this).val();

        values[$(this).data("field")] = value;

        $(this).empty().text(value);
      });

      this.options.save.bind(this.element)(values);
    },

    cancel: function () {
      var instance = this,
        values = {};

      $("td[data-field]", this.element).each(function () {
        var value = $(":input", this).data("old-value");

        values[$(this).data("field")] = value;

        $(this).empty().text(value);
      });

      this.options.cancel.bind(this.element)(values);
    },

    _captureEvent: function (e) {
      e.stopPropagation();
    },

    _captureKey: function (e) {
      if (e.which === 13) {
        this.editing = false;
        this.save();
      } else if (e.which === 27) {
        this.editing = false;
        this.cancel();
      }
    }
  };
  
  $.fn[pluginName] = function (options) {
    console.log(options)
    return this.each(function () {
      if (!$.data(this, "plugin_" + pluginName)) {
        $.data(this, "plugin_" + pluginName, new editable(this, options));
      }
    });
  };
  console.log($.fn[pluginName])
})(jQuery, window, document);

editTable();

//custome editable starts
function editTable() {
  $(function () {
    var pickers = {};

    $("table tr").editable({
      // dropdowns: {
      //   sex: ["Male", "Female"]
      // },
      edit: function (values) {
        $(".edit i", this)
          .removeClass("fa-pencil-alt")
          .addClass("fa-save")
          .attr("title", "Save");

        pickers[this] = new Pikaday({
          field: $("td[data-field=birthday] input", this)[0],
          format: "MMM D, YYYY"
        });
      },
      save: function (values) {
        $(".edit i", this)
          .removeClass("fa-save")
          .addClass("fa-pencil-alt")
          .attr("title", "Edit");

        if (this in pickers) {
          pickers[this].destroy();
          delete pickers[this];
        }
      },
      cancel: function (values) {
        $(".edit i", this)
          .removeClass("fa-save")
          .addClass("fa-pencil-alt")
          .attr("title", "Edit");

        if (this in pickers) {
          pickers[this].destroy();
          delete pickers[this];
        }
      }
    });
  });
}

$(".add-row").click(function () {
  $("#editableTable")
    .find("tbody tr:first")
    .before( 
      
      `<tr>
        <td class='iconitos'>
          <button class="bg-blue-400 button button-small edit text-white" title="Edit">
            Editar
          </button>
          <button wire:click="update()" class="bg-green-400 button button-small edit text-white">
            Guardar
          </button>
          <button  wire:click="$toggle('confirmingDestroy')" class="w-full font-bold text-white bg-red-400 rounded-md button button-small edit">
          Eliminar
        </button>

          
        </td>
        <td data-field='id'></td>
        <td data-field='job_title'></td>
        <td data-field='company_type'></td>
        <td data-field='job_location'></td>
        <td data-field='open_question_1'></td>
        <td data-field='open_question_2'></td>
        <td data-field='multiple_choice_question_1'></td>
        <td data-field='multiple_choice1_option_1'></td>
        <td data-field='multiple_choice1_option_2'></td>
        <td data-field='multiple_choice1_option_3'></td>
        <td data-field='multiple_choice_question_2'></td>
        <td data-field='multiple_choice2_option_1'></td>
        <td data-field='multiple_choice2_option_2'></td>
        <td data-field='multiple_choice2_option_3'></td>
        <td data-field='checkbox_question_1'></td>
        <td data-field='checkbox1_option_1'></td>
        <td data-field='checkbox1_option_2'></td>
        <td data-field='checkbox1_option_3'></td>
        <td data-field='checkbox_question_2'></td>
        <td data-field='checkbox2_option_1'></td>
        <td data-field='checkbox2_option_2'></td>
        <td data-field='checkbox2_option_3'></td>
        <td data-field='created_at'></td>
        <td data-field='updated_at'></td>
      </tr>`
    );
  editTable();
  $imprimir= $("#editableTable").find("tbody tr:first td:last a[title='Edit']");
  console.log($imprimir);
  setTimeout(function () {
    $("#editableTable").find("tbody tr:first td:last a[title='Edit']").click();
  }, 200000);

  setTimeout(function () {
    $("#editableTable")
      .find("tbody tr:first td:last input[type='text']")
      .focus();
  }, 300000000);

  $("#editableTable")
    .find('button[title="Delete"]')
    .unbind("click")
    .click(function (e) {
      $(this).closest("tr").remove();
    });
});

// function myFunction() {}

// $("#editableTable")
//   .find('button[title="Delete"]')
//   .click(function (e) {
//     console.log('borrando')
//     var x;
//     if (confirm("Are you sure you want to delete entire row?") == true) {
      
//       $(this).closest("tr").remove();
      

//     } else {
//     }
//   });
