class ReceptSor {
    #thisRow;
    #object;
    constructor(parent, recept) {
        parent.append(`
            <tr>
                <td>${recept.nev}</td>
                <td>${recept.k_nev}</td>
            </tr>
        `)
        this.#thisRow = parent.children("tr:last-child");
        this.#object = recept;
        this.#thisRow.on("click", () => {
            window.dispatchEvent(new CustomEvent("rowClick", {detail: this.#object}))
        })
    }
}
export default ReceptSor