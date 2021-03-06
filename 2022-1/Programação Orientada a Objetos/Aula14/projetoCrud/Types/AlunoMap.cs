using Microsoft.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore.Metadata.Builders;
using projetoCrud.Models.Domains;

namespace projetoCrud.Types
{
    public class AlunoMap:IEntityTypeConfiguration<Aluno>
    {
        public void Configure(EntityTypeBuilder<Aluno> builder)
        {
            builder.ToTable("aluno");

            builder.Property(i => i.Id)
                .HasColumnName("id");

            builder.HasKey(i => i.Id);

            builder.Property(i => i.Matricula)
                .HasColumnName("matricula")
                .HasColumnType("NVARCHAR")
                .HasMaxLength(80)
                .IsRequired();

            builder.Property(i => i.Nome)
                .HasColumnName("nome")
                .HasColumnType("NVARCHAR")
                .HasMaxLength(80)
                .IsRequired();
            
            builder.Property(i => i.DataNascimento)
                .HasColumnName("dataNascimento")
                .HasColumnType("SMALLDATETIME")
                .IsRequired();

            builder.Property(i => i.Telefone)
                .HasColumnName("telefone")
                .HasColumnType("VARCHAR")
                .HasMaxLength(20)
                .IsRequired();

            builder.Property(i => i.Email)
                .HasColumnName("email")
                .HasColumnType("NVARCHAR")
                .HasMaxLength(80)
                .IsRequired();
        }
    }
}
