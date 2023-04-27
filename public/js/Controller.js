import Model from "./Model.js";
import ReceptTablazat from "./ReceptTablazat.js";

class Controller {
    constructor() {
        const token = $('meta[name="csrf-token"]').attr("content");
        const model = new Model(token);
        model.get('/receptek', this.showTablazat)
        $(window)
    }
    showTablazat(data) {
        new ReceptTablazat($(".tablazathelye"),data);
    }
};
export default Controller