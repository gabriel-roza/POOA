public class Cliente{

    public int ClienteId {...}
    public string Nome {...}
    public string Email {...}
    public string CPF {...}
 
    public double CalcularDivida(Divida pagar){
        if (pagar.Valor > 0){
            return pagar.Valor
        }
        return 0;
    }
}
