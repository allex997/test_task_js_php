const data = [
    { itemId: 1, itemName: "пункт №1", itemParentId: 0 },
    { itemId: 2, itemName: "пункт №1.1", itemParentId: 1 },
    { itemId: 3, itemName: "пункт №1.2", itemParentId: 1 },
    { itemId: 4, itemName: "пункт №1.2.1", itemParentId: 3 },
    { itemId: 5, itemName: "пункт №1.2.2", itemParentId: 3 },
    { itemId: 6, itemName: "пункт №1.2.3", itemParentId: 3 },
    { itemId: 7, itemName: "пункт №2", itemParentId: 0 },
    { itemId: 8, itemName: "пункт №3", itemParentId: 0 },
    { itemId: 9, itemName: "пункт №3.1", itemParentId: 8 },
    { itemId: 10, itemName: "пункт №3.2", itemParentId: 8 },
    { itemId: 11, itemName: "пункт №3.3", itemParentId: 8 },
    { itemId: 12, itemName: "пункт №3.3.1", itemParentId: 11 },
    { itemId: 13, itemName: "пункт №3.3.1.1", itemParentId: 12 },
    { itemId: 14, itemName: "пункт №3.3.1.2", itemParentId: 12 },
    { itemId: 15, itemName: "пункт №3.3.1.3", itemParentId: 12 },
    { itemId: 16, itemName: "пункт №3.3.2", itemParentId: 11 },
    { itemId: 17, itemName: "пункт №4", itemParentId: 0 },
    { itemId: 18, itemName: "пункт №5", itemParentId: 0 },
    { itemId: 19, itemName: "пункт №5.1", itemParentId: 18 }
  ]
  
  
  function parseList(data, acc) {
    if (data.length > 0) {
      let current  = data.shift();
      const $li = document.createElement('li');
      $li.textContent = current.itemName;
      
      acc[current.itemParentId].children[0].appendChild($li);
      
      if (data[0] && data[0].itemParentId === current.itemId) {
        const $ul = document.createElement('ul') 
        $li.appendChild($ul)
      }
      
      acc[current.itemId] = $li;
      parseList(data, acc);
    }
  }

  function recursion(){
    parseList(data, { 0: document.querySelector('div')});
  }
//