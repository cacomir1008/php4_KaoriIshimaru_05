{"filter":false,"title":"2021_03_24_055050_rename_on_books_table.php","tooltip":"/cms/database/migrations/2021_03_24_055050_rename_on_books_table.php","undoManager":{"mark":80,"position":80,"stack":[[{"start":{"row":15,"column":10},"end":{"row":15,"column":15},"action":"insert","lines":["カラム名の"],"id":2},{"start":{"row":15,"column":15},"end":{"row":15,"column":17},"action":"insert","lines":["変更"]},{"start":{"row":15,"column":17},"end":{"row":15,"column":19},"action":"insert","lines":["内容"]}],[{"start":{"row":15,"column":19},"end":{"row":16,"column":0},"action":"insert","lines":["",""],"id":3},{"start":{"row":16,"column":0},"end":{"row":16,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":16,"column":8},"end":{"row":16,"column":60},"action":"insert","lines":["Schema::table('テーブル名', function (Blueprint $table) {"],"id":4}],[{"start":{"row":16,"column":27},"end":{"row":16,"column":28},"action":"remove","lines":["名"],"id":6},{"start":{"row":16,"column":26},"end":{"row":16,"column":27},"action":"remove","lines":["ル"]},{"start":{"row":16,"column":25},"end":{"row":16,"column":26},"action":"remove","lines":["ブ"]},{"start":{"row":16,"column":24},"end":{"row":16,"column":25},"action":"remove","lines":["ー"]},{"start":{"row":16,"column":23},"end":{"row":16,"column":24},"action":"remove","lines":["テ"]},{"start":{"row":16,"column":23},"end":{"row":16,"column":24},"action":"insert","lines":["b"]},{"start":{"row":16,"column":24},"end":{"row":16,"column":25},"action":"insert","lines":["o"]}],[{"start":{"row":16,"column":25},"end":{"row":16,"column":26},"action":"insert","lines":["o"],"id":7},{"start":{"row":16,"column":26},"end":{"row":16,"column":27},"action":"insert","lines":["k"]},{"start":{"row":16,"column":27},"end":{"row":16,"column":28},"action":"insert","lines":["s"]}],[{"start":{"row":16,"column":60},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":8},{"start":{"row":17,"column":0},"end":{"row":17,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":18,"column":5},"end":{"row":19,"column":0},"action":"insert","lines":["",""],"id":9},{"start":{"row":19,"column":0},"end":{"row":19,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":19,"column":4},"end":{"row":19,"column":5},"action":"insert","lines":["}"],"id":10}],[{"start":{"row":19,"column":4},"end":{"row":19,"column":5},"action":"insert","lines":[")"],"id":11}],[{"start":{"row":19,"column":4},"end":{"row":19,"column":5},"action":"remove","lines":[")"],"id":12}],[{"start":{"row":18,"column":4},"end":{"row":18,"column":5},"action":"insert","lines":[")"],"id":13}],[{"start":{"row":18,"column":4},"end":{"row":18,"column":5},"action":"remove","lines":[")"],"id":14}],[{"start":{"row":18,"column":5},"end":{"row":18,"column":6},"action":"insert","lines":[")"],"id":15}],[{"start":{"row":17,"column":12},"end":{"row":17,"column":60},"action":"insert","lines":["table->renameColumn('変更する前のカラム名', '変更した後のカラム名');"],"id":16}],[{"start":{"row":17,"column":33},"end":{"row":17,"column":42},"action":"remove","lines":["変更する前のカラム"],"id":17},{"start":{"row":17,"column":33},"end":{"row":17,"column":42},"action":"insert","lines":["item_name"]}],[{"start":{"row":17,"column":42},"end":{"row":17,"column":43},"action":"remove","lines":["名"],"id":18}],[{"start":{"row":17,"column":59},"end":{"row":18,"column":0},"action":"insert","lines":["",""],"id":19},{"start":{"row":18,"column":0},"end":{"row":18,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":18,"column":12},"end":{"row":18,"column":59},"action":"insert","lines":["table->renameColumn('item_name', '変更した後のカラム名');"],"id":20}],[{"start":{"row":18,"column":59},"end":{"row":19,"column":0},"action":"insert","lines":["",""],"id":21},{"start":{"row":19,"column":0},"end":{"row":19,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":19,"column":12},"end":{"row":19,"column":59},"action":"insert","lines":["table->renameColumn('item_name', '変更した後のカラム名');"],"id":22}],[{"start":{"row":19,"column":59},"end":{"row":20,"column":0},"action":"insert","lines":["",""],"id":23},{"start":{"row":20,"column":0},"end":{"row":20,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":20,"column":8},"end":{"row":20,"column":12},"action":"remove","lines":["    "],"id":24}],[{"start":{"row":20,"column":8},"end":{"row":20,"column":12},"action":"insert","lines":["    "],"id":25}],[{"start":{"row":20,"column":12},"end":{"row":20,"column":59},"action":"insert","lines":["table->renameColumn('item_name', '変更した後のカラム名');"],"id":26}],[{"start":{"row":18,"column":33},"end":{"row":18,"column":42},"action":"remove","lines":["item_name"],"id":27},{"start":{"row":18,"column":33},"end":{"row":18,"column":44},"action":"insert","lines":["item_number"]}],[{"start":{"row":19,"column":33},"end":{"row":19,"column":42},"action":"remove","lines":["item_name"],"id":28},{"start":{"row":19,"column":33},"end":{"row":19,"column":44},"action":"insert","lines":["item_amount"]}],[{"start":{"row":20,"column":33},"end":{"row":20,"column":42},"action":"remove","lines":["item_name"],"id":29},{"start":{"row":20,"column":33},"end":{"row":20,"column":42},"action":"insert","lines":["published"]}],[{"start":{"row":20,"column":46},"end":{"row":20,"column":56},"action":"remove","lines":["変更した後のカラム名"],"id":30},{"start":{"row":20,"column":46},"end":{"row":20,"column":47},"action":"insert","lines":["a"]},{"start":{"row":20,"column":47},"end":{"row":20,"column":48},"action":"insert","lines":["d"]},{"start":{"row":20,"column":48},"end":{"row":20,"column":49},"action":"insert","lines":["d"]},{"start":{"row":20,"column":49},"end":{"row":20,"column":50},"action":"insert","lines":["e"]},{"start":{"row":20,"column":50},"end":{"row":20,"column":51},"action":"insert","lines":["d"]}],[{"start":{"row":17,"column":46},"end":{"row":17,"column":56},"action":"remove","lines":["変更した後のカラム名"],"id":31},{"start":{"row":17,"column":46},"end":{"row":17,"column":47},"action":"insert","lines":["i"]},{"start":{"row":17,"column":47},"end":{"row":17,"column":48},"action":"insert","lines":["t"]},{"start":{"row":17,"column":48},"end":{"row":17,"column":49},"action":"insert","lines":["e"]},{"start":{"row":17,"column":49},"end":{"row":17,"column":50},"action":"insert","lines":["m"]},{"start":{"row":17,"column":50},"end":{"row":17,"column":51},"action":"insert","lines":["_"]},{"start":{"row":17,"column":51},"end":{"row":17,"column":52},"action":"insert","lines":["p"]},{"start":{"row":17,"column":52},"end":{"row":17,"column":53},"action":"insert","lines":["r"]},{"start":{"row":17,"column":53},"end":{"row":17,"column":54},"action":"insert","lines":["o"]}],[{"start":{"row":17,"column":54},"end":{"row":17,"column":55},"action":"insert","lines":["b"],"id":32},{"start":{"row":17,"column":55},"end":{"row":17,"column":56},"action":"insert","lines":["l"]},{"start":{"row":17,"column":56},"end":{"row":17,"column":57},"action":"insert","lines":["e"]},{"start":{"row":17,"column":57},"end":{"row":17,"column":58},"action":"insert","lines":["m"]}],[{"start":{"row":18,"column":48},"end":{"row":18,"column":57},"action":"remove","lines":["変更した後のカラム"],"id":33}],[{"start":{"row":18,"column":48},"end":{"row":18,"column":49},"action":"remove","lines":["名"],"id":34}],[{"start":{"row":18,"column":48},"end":{"row":18,"column":49},"action":"insert","lines":["i"],"id":35},{"start":{"row":18,"column":49},"end":{"row":18,"column":50},"action":"insert","lines":["t"]},{"start":{"row":18,"column":50},"end":{"row":18,"column":51},"action":"insert","lines":["e"]},{"start":{"row":18,"column":51},"end":{"row":18,"column":52},"action":"insert","lines":["m"]},{"start":{"row":18,"column":52},"end":{"row":18,"column":53},"action":"insert","lines":["_"]},{"start":{"row":18,"column":53},"end":{"row":18,"column":54},"action":"insert","lines":["r"]},{"start":{"row":18,"column":54},"end":{"row":18,"column":55},"action":"insert","lines":["e"]},{"start":{"row":18,"column":55},"end":{"row":18,"column":56},"action":"insert","lines":["s"]},{"start":{"row":18,"column":56},"end":{"row":18,"column":57},"action":"insert","lines":["u"]},{"start":{"row":18,"column":57},"end":{"row":18,"column":58},"action":"insert","lines":["l"]}],[{"start":{"row":18,"column":57},"end":{"row":18,"column":58},"action":"remove","lines":["l"],"id":36},{"start":{"row":18,"column":56},"end":{"row":18,"column":57},"action":"remove","lines":["u"]},{"start":{"row":18,"column":55},"end":{"row":18,"column":56},"action":"remove","lines":["s"]},{"start":{"row":18,"column":54},"end":{"row":18,"column":55},"action":"remove","lines":["e"]},{"start":{"row":18,"column":53},"end":{"row":18,"column":54},"action":"remove","lines":["r"]}],[{"start":{"row":18,"column":53},"end":{"row":18,"column":54},"action":"insert","lines":["c"],"id":37},{"start":{"row":18,"column":54},"end":{"row":18,"column":55},"action":"insert","lines":["o"]},{"start":{"row":18,"column":55},"end":{"row":18,"column":56},"action":"insert","lines":["l"]}],[{"start":{"row":18,"column":55},"end":{"row":18,"column":56},"action":"remove","lines":["l"],"id":38}],[{"start":{"row":18,"column":55},"end":{"row":18,"column":56},"action":"insert","lines":["p"],"id":39},{"start":{"row":18,"column":56},"end":{"row":18,"column":57},"action":"insert","lines":["i"]},{"start":{"row":18,"column":57},"end":{"row":18,"column":58},"action":"insert","lines":["n"]},{"start":{"row":18,"column":58},"end":{"row":18,"column":59},"action":"insert","lines":["g"]}],[{"start":{"row":19,"column":48},"end":{"row":19,"column":58},"action":"remove","lines":["変更した後のカラム名"],"id":40},{"start":{"row":19,"column":48},"end":{"row":19,"column":49},"action":"insert","lines":["i"]},{"start":{"row":19,"column":49},"end":{"row":19,"column":50},"action":"insert","lines":["t"]},{"start":{"row":19,"column":50},"end":{"row":19,"column":51},"action":"insert","lines":["e"]},{"start":{"row":19,"column":51},"end":{"row":19,"column":52},"action":"insert","lines":["m"]},{"start":{"row":19,"column":52},"end":{"row":19,"column":53},"action":"insert","lines":["_"]},{"start":{"row":19,"column":53},"end":{"row":19,"column":54},"action":"insert","lines":["r"]},{"start":{"row":19,"column":54},"end":{"row":19,"column":55},"action":"insert","lines":["e"]},{"start":{"row":19,"column":55},"end":{"row":19,"column":56},"action":"insert","lines":["s"]},{"start":{"row":19,"column":56},"end":{"row":19,"column":57},"action":"insert","lines":["u"]},{"start":{"row":19,"column":57},"end":{"row":19,"column":58},"action":"insert","lines":["l"]},{"start":{"row":19,"column":58},"end":{"row":19,"column":59},"action":"insert","lines":["t"]}],[{"start":{"row":21,"column":6},"end":{"row":21,"column":7},"action":"insert","lines":[";"],"id":41}],[{"start":{"row":17,"column":12},"end":{"row":17,"column":13},"action":"insert","lines":["$"],"id":42}],[{"start":{"row":18,"column":12},"end":{"row":18,"column":13},"action":"insert","lines":["$"],"id":43}],[{"start":{"row":19,"column":12},"end":{"row":19,"column":13},"action":"insert","lines":["$"],"id":44}],[{"start":{"row":20,"column":12},"end":{"row":20,"column":13},"action":"insert","lines":["$"],"id":45}],[{"start":{"row":31,"column":10},"end":{"row":32,"column":0},"action":"insert","lines":["",""],"id":46},{"start":{"row":32,"column":0},"end":{"row":32,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":32,"column":8},"end":{"row":32,"column":60},"action":"insert","lines":["Schema::table('books', function (Blueprint $table) {"],"id":47}],[{"start":{"row":31,"column":10},"end":{"row":31,"column":14},"action":"insert","lines":["変更後の"],"id":48},{"start":{"row":31,"column":14},"end":{"row":31,"column":16},"action":"insert","lines":["内容"]}],[{"start":{"row":32,"column":60},"end":{"row":33,"column":0},"action":"insert","lines":["",""],"id":49},{"start":{"row":33,"column":0},"end":{"row":33,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":33,"column":12},"end":{"row":36,"column":55},"action":"insert","lines":["            $table->renameColumn('item_name', 'item_problem');","            $table->renameColumn('item_number', 'item_coping');","            $table->renameColumn('item_amount', 'item_result');","            $table->renameColumn('published', 'added');"],"id":50}],[{"start":{"row":37,"column":5},"end":{"row":37,"column":7},"action":"insert","lines":["）；"],"id":51}],[{"start":{"row":31,"column":16},"end":{"row":31,"column":17},"action":"insert","lines":["　"],"id":52}],[{"start":{"row":31,"column":17},"end":{"row":31,"column":23},"action":"insert","lines":["変更した後の"],"id":53},{"start":{"row":31,"column":23},"end":{"row":31,"column":28},"action":"insert","lines":["カラム名："]}],[{"start":{"row":31,"column":28},"end":{"row":31,"column":30},"action":"insert","lines":["前の"],"id":54},{"start":{"row":31,"column":30},"end":{"row":31,"column":34},"action":"insert","lines":["カラム名"]}],[{"start":{"row":15,"column":19},"end":{"row":15,"column":20},"action":"insert","lines":["　"],"id":55}],[{"start":{"row":15,"column":20},"end":{"row":15,"column":37},"action":"insert","lines":["変更した後のカラム名：前のカラム名"],"id":56}],[{"start":{"row":15,"column":22},"end":{"row":15,"column":24},"action":"remove","lines":["した"],"id":57},{"start":{"row":15,"column":22},"end":{"row":15,"column":24},"action":"insert","lines":["した"]},{"start":{"row":15,"column":22},"end":{"row":15,"column":24},"action":"remove","lines":["した"]},{"start":{"row":15,"column":22},"end":{"row":15,"column":23},"action":"insert","lines":["s"]},{"start":{"row":15,"column":22},"end":{"row":15,"column":23},"action":"remove","lines":["s"]},{"start":{"row":15,"column":22},"end":{"row":15,"column":23},"action":"insert","lines":["す"]}],[{"start":{"row":15,"column":22},"end":{"row":15,"column":23},"action":"remove","lines":["す"],"id":58},{"start":{"row":15,"column":22},"end":{"row":15,"column":24},"action":"insert","lines":["すr"]},{"start":{"row":15,"column":22},"end":{"row":15,"column":24},"action":"remove","lines":["すr"]},{"start":{"row":15,"column":22},"end":{"row":15,"column":24},"action":"insert","lines":["する"]},{"start":{"row":15,"column":22},"end":{"row":15,"column":24},"action":"remove","lines":["する"]},{"start":{"row":15,"column":22},"end":{"row":15,"column":25},"action":"insert","lines":["するm"]},{"start":{"row":15,"column":22},"end":{"row":15,"column":25},"action":"remove","lines":["するm"]},{"start":{"row":15,"column":22},"end":{"row":15,"column":25},"action":"insert","lines":["スルマ"]},{"start":{"row":15,"column":22},"end":{"row":15,"column":25},"action":"remove","lines":["スルマ"]},{"start":{"row":15,"column":22},"end":{"row":15,"column":25},"action":"insert","lines":["する前"]},{"start":{"row":15,"column":22},"end":{"row":15,"column":25},"action":"remove","lines":["する前"]},{"start":{"row":15,"column":22},"end":{"row":15,"column":25},"action":"insert","lines":["する前"]}],[{"start":{"row":15,"column":25},"end":{"row":15,"column":26},"action":"remove","lines":["後"],"id":59}],[{"start":{"row":15,"column":31},"end":{"row":15,"column":32},"action":"remove","lines":["前"],"id":60}],[{"start":{"row":15,"column":31},"end":{"row":15,"column":32},"action":"insert","lines":["後"],"id":61}],[{"start":{"row":33,"column":12},"end":{"row":33,"column":24},"action":"remove","lines":["            "],"id":62}],[{"start":{"row":33,"column":47},"end":{"row":33,"column":59},"action":"remove","lines":["item_problem"],"id":63}],[{"start":{"row":33,"column":34},"end":{"row":33,"column":46},"action":"insert","lines":["item_problem"],"id":64}],[{"start":{"row":33,"column":46},"end":{"row":33,"column":55},"action":"remove","lines":["item_name"],"id":65}],[{"start":{"row":33,"column":50},"end":{"row":33,"column":59},"action":"insert","lines":["item_name"],"id":66}],[{"start":{"row":34,"column":49},"end":{"row":34,"column":60},"action":"remove","lines":["item_coping"],"id":67}],[{"start":{"row":34,"column":34},"end":{"row":34,"column":45},"action":"insert","lines":["item_coping"],"id":68}],[{"start":{"row":34,"column":45},"end":{"row":34,"column":56},"action":"remove","lines":["item_number"],"id":69}],[{"start":{"row":34,"column":49},"end":{"row":34,"column":60},"action":"insert","lines":["item_number"],"id":70}],[{"start":{"row":35,"column":49},"end":{"row":35,"column":60},"action":"remove","lines":["item_result"],"id":71}],[{"start":{"row":35,"column":34},"end":{"row":35,"column":45},"action":"insert","lines":["item_result"],"id":72}],[{"start":{"row":35,"column":45},"end":{"row":35,"column":56},"action":"remove","lines":["item_amount"],"id":73}],[{"start":{"row":35,"column":49},"end":{"row":35,"column":60},"action":"insert","lines":["item_amount"],"id":74}],[{"start":{"row":36,"column":47},"end":{"row":36,"column":52},"action":"remove","lines":["added"],"id":75}],[{"start":{"row":36,"column":34},"end":{"row":36,"column":39},"action":"insert","lines":["added"],"id":76}],[{"start":{"row":36,"column":39},"end":{"row":36,"column":48},"action":"remove","lines":["published"],"id":77}],[{"start":{"row":36,"column":43},"end":{"row":36,"column":52},"action":"insert","lines":["published"],"id":78}],[{"start":{"row":37,"column":6},"end":{"row":37,"column":7},"action":"remove","lines":["；"],"id":79}],[{"start":{"row":37,"column":6},"end":{"row":37,"column":7},"action":"insert","lines":[";"],"id":80}],[{"start":{"row":37,"column":6},"end":{"row":37,"column":7},"action":"remove","lines":[";"],"id":81},{"start":{"row":37,"column":5},"end":{"row":37,"column":6},"action":"remove","lines":["）"]}],[{"start":{"row":37,"column":5},"end":{"row":37,"column":6},"action":"insert","lines":[")"],"id":82},{"start":{"row":37,"column":6},"end":{"row":37,"column":7},"action":"insert","lines":[";"]}],[{"start":{"row":38,"column":1},"end":{"row":39,"column":0},"action":"insert","lines":["",""],"id":83},{"start":{"row":39,"column":0},"end":{"row":39,"column":1},"action":"insert","lines":["}"]}]]},"ace":{"folds":[],"scrolltop":180,"scrollleft":0,"selection":{"start":{"row":18,"column":40},"end":{"row":18,"column":40},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":10,"state":"php-doc-start","mode":"ace/mode/php"}},"timestamp":1616565449084,"hash":"216d837775a8dbda61b7e0c67c9a92050bd04a27"}