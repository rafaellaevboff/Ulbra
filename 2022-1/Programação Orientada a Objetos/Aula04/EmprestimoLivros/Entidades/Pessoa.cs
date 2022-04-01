namespace EmprestimoLivros.Entidades
{
    public class Pessoa
    {
        public Pessoa(int id, string nome, string telefone)
        {
            Id = id;
            Nome = nome;
            Telefone = telefone;
        }

        public int Id { get; set; }
        public string Nome { get; set; }
        public string Telefone { get; set; }
    }
}