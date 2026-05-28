# 🔧 Verificar Credenciais do Supabase

## Passo 1: Abrir Dashboard
1. Acesse: https://supabase.com/dashboard
2. Selecione o projeto **Nenboard**
3. No menu lateral, clique em **Settings** (ícone de engrenagem)
4. Clique em **Database** no submenu

## Passo 2: Encontrar Connection Pooler
Na página de Database, procure pela seção **Connection String** e selecione a aba **Connection Pooler**

Você verá algo assim:
```
postgresql://postgres.tfxdxkgoggtrrfxrnmuj:[YOUR-PASSWORD]@aws-0-sa-east-1.pooler.supabase.com:5432/postgres
```

## Passo 3: Extrair Dados
A partir dessa string, você precisa extrair:

| Campo | Valor |
|-------|-------|
| `DB_HOST` | `aws-0-sa-east-1.pooler.supabase.com` |
| `DB_PORT` | `5432` |
| `DB_DATABASE` | `postgres` |
| `DB_USERNAME` | `postgres.tfxdxkgoggtrrfxrnmuj` |
| `DB_PASSWORD` | Copie exatamente o que está entre `:` e `@` |

## 🔴 Se a senha estiver diferente da que você tem:
1. Clique em "Reset database password" (na mesma página)
2. Defina uma nova senha
3. Copie e cole aqui

## 📸 Me envie um print!
Se tiver dúvida, tire um print da tela com as credenciais (oculte a senha se quiser) e envia que eu corrijo tudo.
