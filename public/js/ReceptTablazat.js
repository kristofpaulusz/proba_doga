import ReceptSor from "./ReceptSor.js";

class ReceptTablazat {
    constructor(parent, receptek) {
        parent.html(`
        <table class='table table-hover'>
            <thead class='thead-light'>
                <th scope='col'>Recept Név</th>
                <th scope='col'>Recept Kategória</th>
            </thead>
            <tbody id='appendThis'>
            </tbody>
        </table>
        `);
        receptek.forEach(recept => {
            new ReceptSor($("#appendThis"), recept)
        });
    }
}
export default ReceptTablazat